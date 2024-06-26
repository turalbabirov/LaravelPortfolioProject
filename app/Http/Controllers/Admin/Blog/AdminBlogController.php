<?php

namespace App\Http\Controllers\Admin\Blog;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Burada tüm blog yazılarını listeleyen bir sayfa veya işlem gerçekleştirilir

        // Tüm blog yazılarını veritabanından alalım
        $blogs = Blog::all();

        // Blog yazılarını listeleyen view'e gönderelim
        return view('admin.pages.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Yeni bir blog yazısı oluşturmak için gerekli olan formu gösteren sayfa veya işlem gerçekleştirilir
        return view('admin.pages.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Yeni oluşturulan blog yazısını veritabanına kaydeden işlem gerçekleştirilir
        // $request nesnesi üzerinden formdan gelen verilere erişebilirsiniz

        // Formdan gelen verileri doğrulayın
        $validatedData = $request->validate([
            'blogtitle' => 'required|string|max:255',
            'blogtext' => 'required|string',
            'blogimages.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // İzin verilen dosya türleri ve maksimum boyut
        ]);

        // Blog modeli üzerinden yeni bir kayıt oluşturun
        $blog = new Blog();
        $blog->title = $validatedData['blogtitle'];
        $blog->text = $validatedData['blogtext'];
        $blog->save();

        // Blogun ID'sini alalım
        $blogId = $blog->id;

        // Resimleri kaydetme
        $imagePaths = [];
        if ($request->hasFile('blogimages')) {
            foreach ($request->file('blogimages') as $image) {
                // Dosya adını benzersiz bir şekilde oluştur
                $uniqueName = uniqid('', true);
                $extension = $image->getClientOriginalExtension();
                $newFileName = $uniqueName . '.' . $extension;

                // Dosyayı belirtilen dizine kaydet
                $path = $image->storeAs('public/blogs/' . $blogId . '/pictures', $newFileName);

                // Dosya yolunu kaydet
                $imagePaths[] = Storage::url($path);
            }
        }

        // Eğer resim varsa, JSON formatında kaydet
        if (!empty($imagePaths)) {
            $blog->images = json_encode($imagePaths);
        }

        $blog->save();

        // Başarılı bir şekilde oluşturulduğunda kullanıcıyı yönlendirin veya bir mesaj döndürün
        return redirect()->route('admin.blog.index')->with('success', 'Blog yazısı başarıyla oluşturuldu.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        // Belirli bir blog yazısını düzenlemek için gerekli olan düzenleme formunu gösteren sayfa veya işlem gerçekleştirilir
        // $id parametresi, düzenlenmek istenen blog yazısının kimliğini temsil eder


        // Belirli bir blog yazısını bulalım
        $blog = Blog::findOrFail($id);

        // Düzenleme formunu gösterelim
        return view('admin.pages.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        // Formdan gelen verileri doğrulayın
        $validatedData = $request->validate([
            'blogtitle' => 'required|string|max:255',
            'blogtext' => 'required|string',
            'blogimages.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // İzin verilen dosya türleri ve maksimum boyut
        ]);

        // Belirli bir blog yazısını bulalım ve güncelleyelim
        $blog = Blog::findOrFail($id);
        $blog->title = $validatedData['blogtitle'];
        $blog->text = $validatedData['blogtext'];

        // Eğer yeni resimler yüklenmişse eski resimleri temizleyelim ve yeni resimleri kaydedelim
        if ($request->hasFile('blogimages')) {
            // Eski resim dosyalarını temizleyelim
            $this->deleteOldImages($blog);

            // Yeni resimleri kaydedelim
            $imagePaths = [];
            foreach ($request->file('blogimages') as $image) {
                // Dosya adını benzersiz bir şekilde oluştur
                $uniqueName = uniqid('', true);
                $extension = $image->getClientOriginalExtension();
                $newFileName = $uniqueName . '.' . $extension;

                // Dosyayı belirtilen dizine kaydet
                $path = $image->storeAs('public/blogs/' . $id . '/pictures', $newFileName);

                // Dosya yolunu kaydet
                $imagePaths[] = Storage::url($path);
            }

            // Yeni resimler varsa, JSON formatında kaydet
            if (!empty($imagePaths)) {
                $blog->images = json_encode($imagePaths);
            } else {
                $blog->images = null;
            }
        }

        $blog->save();

        // Başarılı bir şekilde güncellendiğinde kullanıcıyı yönlendirin veya bir mesaj döndürün
        return redirect()->route('admin.blog.index')->with('success', 'Blog yazısı başarıyla güncellendi.');
    }

    // Eski resimleri silme metodu
    private function deleteOldImages($blog)
    {
        if (!empty($blog->images)) {
            $oldImages = json_decode($blog->images);
            foreach ($oldImages as $image) {
                // Dosya yolunu storage üzerinden silelim
                $path = str_replace('storage', 'public', parse_url($image, PHP_URL_PATH));
                Storage::delete($path);
            }
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        // Belirli bir blog yazısını silen işlem gerçekleştirilir
        // $id parametresi, silinmek istenen blog yazısının kimliğini temsil eder


        // Belirli bir blog yazısını bulalım ve silelim
        $blog = Blog::findOrFail($id);

        // Resim dosyalarını temizleyelim
        $this->deleteOldImages($blog);

        // Blog yazısını veritabanından silelim
        $blog->delete();

        // Başarılı bir şekilde silindiğinde kullanıcıyı yönlendirin veya bir mesaj döndürün
        return redirect()->route('admin.blog.index')->with('success', 'Blog yazısı başarıyla silindi.');
    }
}
