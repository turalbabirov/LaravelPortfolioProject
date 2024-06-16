{{-- Layouts: --}}
@extends('admin.layouts.layout')

{{-- Spesific CSS/JS includes: --}}
@section('headerCssJs')
    <style>
        /* Modal stilleri */
        .modal {
            display: none; /* Başlangıçta gizli */
            position: absolute; /* Dökümanın tamamına göre konumlandır */
            z-index: 1; /* Diğer içeriğin üzerinde görünsün */
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto; /* Eğer içerik aşırı büyükse kaydırma çubukları gözüksün */
            background-color: rgba(0,0,0,0.4); /* Siyah arka plan, %40 saydamlık */
            padding-top: 60px; /* Modalın başlığı için yer bırak */
        }

        /* Modal içeriği */
        .modal-content {
            background-color: #fefefe;
            margin: 5% auto; /* Dikey hizalama */
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        /* Kapat butonu stilleri */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
@endsection


{{-- Main Content Section: --}}
@section('mainContent')
    <!-- ========== section start ========== -->
    <section class="table-components">
        <div class="container-fluid">

            <div class="row mt-5">
                <div class="col-lg-12">
                    <!-- start card -->
                    <div class="card-style settings-card-1 mb-30">
                        <div class="title mb-30 d-flex justify-content-between align-items-center">
                            <h6>About:</h6>
                        </div>

                        <!-- Eger xeta varsa -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <div class="alert">
                                    <h4 class="alert-heading">Xəta!</h4>
                                    <br>
                                    @foreach ($errors->all() as $error)
                                        <p class="text-medium">
                                            {{ $error }}
                                        </p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="mt-5"></div>

                        <div class="profile-info">
                            <form id="imageUploadForm" action="{{ route('admin.profile.store', ['id' => $user->id]) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <!-- ABOUT SECTION: -->
                                <div>
                                    <!-- User picture, fullname, email -->
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12">
                                            <div class="card-style-5 mb-30">
                                                <div class="card-image col-2">
                                                    <img src="{{ asset('storage/pictures/' . $user->picture )}}" alt=""/>
                                                </div>
                                                <div class="col">
                                                    <div class="input-style-1">
                                                        <label>Name:</label>
                                                        <input type="text" name="name" placeholder="Tural" value="{{$user->name}}" disabled class="bg-light-subtle" />
                                                        @if ($errors->has('name'))
                                                            <div>
                                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                                            </div>
                                                        @endif
                                                    </div>

                                                    <div class="input-style-1">
                                                        <label>Email:</label>
                                                        <input type="email" name="email" placeholder="admin@example.com" value="{{$user->email}}" disabled class="bg-light-subtle" />
                                                        @if ($errors->has('email'))
                                                            <div>
                                                                <span class="text-danger">{{ $errors->first('email') }}</span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->

                                    <!-- Address, Phone, Birthday, About -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-style-1">
                                                <label>Address:</label>
                                                <input type="text" name="address" />
                                                @if ($errors->has('address'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="input-style-1">
                                                <label>Phone:</label>
                                                <input type="tel" name="phone" required>

                                            @if ($errors->has('phone'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="input-style-1">
                                                <label>Birthday:</label>
                                                <input type="date" name="birthday" />
                                                @if ($errors->has('birthday'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('birthday') }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-style-1">
                                                <label>About:</label>
                                                <textarea name="about" id="about" cols="30" rows="11"></textarea>
                                                @if ($errors->has('about'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('about') }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Freelance, Degree, Experience -->
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="mb-3">Freelance (yes or not):</div>
                                            <div class="d-flex">
                                                <div class="form-check radio-style mt-10 me-5">
                                                    <input class="form-check-input" type="radio" id="radio-1" name="freelance" value="1" />
                                                    <label class="form-check-label" for="radio-1">yes</label>
                                                </div>
                                                <div class="form-check radio-style mt-10">
                                                    <input class="form-check-input" type="radio" id="radio-2" name="freelance" value="0" checked />
                                                    <label class="form-check-label" for="radio-2">not</label>
                                                </div>
                                                @if ($errors->has('freelance'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('freelance') }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">Degree:</div>
                                            <div class="select-style-2">
                                                <div class="select-position">
                                                    <select name="degree">
                                                        <option value="">Select category</option>
                                                        <option>Associate</option>
                                                        <option>Bachelor</option>
                                                        <option>Master</option>
                                                        <option>Master</option>
                                                        <option>Doctorate</option>
                                                        <option>Professional</option>
                                                        <option>Postgraduate</option>
                                                        <option>Honorary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($errors->has('degree'))
                                                <div>
                                                    <span class="text-danger">{{ $errors->first('degree') }}</span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">Experience:</div>
                                            <div class="select-style-2">
                                                <div class="select-position">
                                                    <select name="experience">
                                                        <option value="">Select category</option>
                                                        <option>1 Year</option>
                                                        <option>2 Years</option>
                                                        <option>3 Years</option>
                                                        <option>4 Years</option>
                                                        <option>5 Years</option>
                                                        <option>6 Years</option>
                                                        <option>7 Years</option>
                                                        <option>8 Years</option>
                                                        <option>9 Years</option>
                                                        <option>10 Years</option>
                                                    </select>
                                                </div>
                                            </div>
                                            @if ($errors->has('experience'))
                                                <div>
                                                    <span class="text-danger">{{ $errors->first('experience') }}</span>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!-- Divider Start -->
                                <div class="divider mb-5 mt-5"><hr /></div>
                                <!-- Divider End ####################################################### -->

                                <!-- EXPERTISE SECTION: -->
                                <div style="position: relative; min-height: 400px">
                                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                                        <h6>Expertise:</h6>
                                    </div>

                                    <div class="row">
                                        <div  class="col">
                                            <div class="card-style mb-30 d-flex flex-wrap" id="checkboxContainer1">
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" name="expertise[]" value="Front-End Developer" id="Front-End Developer" />
                                                    <label class="form-check-label" for="Front-End Developer">
                                                        Front-End Developer</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" name="expertise[]" value="Apps Developer" id="Apps Developer" />
                                                    <label class="form-check-label" for="Apps Developer">
                                                        Apps Developer</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" name="expertise[]" value="Web Developer" id="Web Developer" />
                                                    <label class="form-check-label" for="Web Developer">
                                                        Web Developer</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" name="expertise[]" value="Apps Designer" id="Apps Designer" />
                                                    <label class="form-check-label" for="Apps Designer">
                                                        Apps Designer</label>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('expertise'))
                                            <div>
                                                <span class="text-danger">{{ $errors->first('expertise') }}</span>
                                            </div>
                                        @endif

                                        <div>
                                            <!-- Modal -->
                                            <div id="myModal1" class="modal modal1">
                                                <!-- Modal içeriği -->
                                                <div class="modal-content modal-content1 p-5 input-style-1" >
                                                    <span class="close close1" onclick="closeModal('myModal1')" style="position: absolute; right: 30px; top: 0">&times;</span>
                                                    <input type="text" id="skillInput1" placeholder="Skill name..">
                                                    <button type="button" class="btn btn-light mt-3" onclick="addSkill('expertise', document.querySelector('#skillInput1').value, 'checkboxContainer1', 'modal1', 'modal-content1', 'close1')">Add skill</button>
                                                </div>
                                            </div>

                                            <!-- Buton -->
                                            <button type="button" class="btn btn-light" onclick="openModal('myModal1')">+</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF SECTION -->
                                <!-- Divider Start -->
                                <div class="divider mb-5 mt-5"><hr /></div>
                                <!-- Divider End ####################################################### -->

                                <!-- SKILLS SECTION: -->
                                <div style="position: relative; min-height: 400px">
                                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                                        <h6>Skills:</h6>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="card-style mb-30 d-flex flex-wrap" id="checkboxContainer2" >
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" value="HTML" id="HTML" name="skill[]" />
                                                    <label class="form-check-label" for="HTML">
                                                        HTML</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" value="CSS" id="CSS" name="skill[]" />
                                                    <label class="form-check-label" for="CSS">
                                                        CSS</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" value="PHP" id="PHP" name="skill[]" />
                                                    <label class="form-check-label" for="PHP">
                                                        PHP</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" value="Javascript" id="Javascript" name="skill[]" />
                                                    <label class="form-check-label" for="Javascript">
                                                        Javascript</label>
                                                </div>
                                                <div class="form-check checkbox-style mb-20 me-5">
                                                    <input class="form-check-input" type="checkbox" value="Angular Js" id="Angular Js" name="skill[]" />
                                                    <label class="form-check-label" for="Angular Js">
                                                        Angular Js</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div>
                                            <!-- Modal -->
                                            <div id="myModal2" class="modal modal2">
                                                <!-- Modal içeriği -->
                                                <div class="modal-content modal-content2 p-5 input-style-1" >
                                                    <span class="close close2" onclick="closeModal('myModal2')" style="position: absolute; right: 30px; top: 0">&times;</span>
                                                    <input type="text" id="skillInput2" placeholder="Skill name..">
                                                    <button type="button" class="btn btn-light mt-3" onclick="addSkill('skill', document.querySelector('#skillInput2').value, 'checkboxContainer2', 'modal2', 'modal-content2', 'close2')">Add skill</button>
                                                </div>
                                            </div>

                                            <!-- Buton -->
                                            <button type="button" class="btn btn-light" onclick="openModal('myModal2')">+</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF SECTION -->
                                <!-- Divider Start -->
                                <div class="divider mb-5 mt-5"><hr /></div>
                                <!-- Divider End ####################################################### -->

                                <!-- EXPERIENCE SECTION: -->
                                <div>
                                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                                        <h6>Experience:</h6>
                                    </div>

                                    <div class="row" id="experienceContainer">
                                        <div class="col">
                                            <div class="card-style mb-30">
                                                <!-- input style start -->
                                                <div class="input-style-1">
                                                    <label>Position:</label>
                                                    <input type="text" name="position" placeholder="Add your position.." />
                                                </div>
                                                <!-- end input -->

                                                <!-- input style start -->
                                                <div class="input-style-1">
                                                    <label>Company:</label>
                                                    <input type="text" name="company" placeholder="Add your company.." />
                                                </div>
                                                <!-- end input -->

                                                <!-- input style start -->
                                                <div class="input-style-1 me-5">
                                                    <label>Years:</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex">
                                                            <div class="mt-2">from</div>
                                                            <div class="input-style-2 ms-3">
                                                                <input type="date" name="fromdate" />
                                                                <span class="icon"><i class="lni lni-chevron-down"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-5"> </div>
                                                        <div class="d-flex">
                                                            <div class="mt-2">to</div>
                                                            <div class="input-style-2 ms-3">
                                                                <input type="date" name="enddate" />
                                                                <span class="icon"><i class="lni lni-chevron-down"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end input -->

                                                <!-- textarea style start -->
                                                <div class="input-style-1">
                                                    <label>Description:</label>
                                                    <textarea name="experienceDescription" placeholder="Add your description.." rows="5"></textarea>
                                                </div>
                                                <!-- end textarea -->
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4" id="buttonContainer">
                                        <!-- Button -->
                                        <button type="button" class="btn btn-secondary" onclick="addExperience()">Add more experience</button>
                                    </div>
                                </div>
                                <!-- END OF SECTION -->
                                <!-- Divider Start -->
                                <div class="divider mb-5 mt-5"><hr /></div>
                                <!-- Divider End ####################################################### -->

                                <!-- PORTFOLIO SECTION: -->
                                <div>
                                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                                        <h6>Portfolio:</h6>
                                        <div class="mt-4" id="buttonContainer">
                                            <!-- Button -->
                                            <a href="#" type="button" class="btn btn-outline-secondary">Add project category</a>
                                        </div>
                                    </div>

                                    <div class="row" id="portfolioContainer">
                                        <div class="col">
                                            <div class="card-style mb-30">
                                                <div class="input-style-1">
                                                    <label>Title:</label>
                                                    <input type="text" id="projectTitle" name="projectTitle" placeholder="Add project title here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>URL:</label>
                                                    <input type="text" id="projectUrl" name="projectUrl" placeholder="Add project url here.." />
                                                </div>

                                                <div class="input-style-1 me-5">
                                                    <label>Photo:</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="col-2">
                                                            <img id="projectImage" src="{{ asset('storage/pictures/' . $user->picture )}}" alt="Selected Image" style="height: 200px; width: 150px; object-fit: cover; object-position: center;" />
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-style-1">
                                                                <label for="projectPhoto" class="form-check-label">Select project photo:</label>
                                                                <input type="file" name="projectPhoto" id="projectPhoto" class="form-control form-control-file" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-style-1">
                                                    <div class="d-flex select-style-1">
                                                        <label class="col-2 mt-3">Choose project category:</label>
                                                        <div class="col-10 select-position">
                                                            <select id="projectCategory" name="projectCategory">
                                                                <option value="">Select category</option>
                                                                <option value="Category one">Category one</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Description:</label>
                                                    <textarea id="projectDescription" name="projectDescription" placeholder="Add portfolio description here.." rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4" id="buttonContainer">
                                        <!-- Button -->
                                        <button type="button" class="btn btn-secondary" onclick="addProject()">Add more project</button>
                                    </div>
                                </div>
                                <!-- END OF SECTION -->
                                <!-- Divider Start -->
                                <div class="divider mb-5 mt-5"><hr /></div>
                                <!-- Divider End ####################################################### -->

                                <!-- COURSES SECTION: -->
                                <div>
                                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                                        <h6>Courses:</h6>
                                    </div>

                                    <div class="row" id="courseContainer">
                                        <div class="col">
                                            <div class="card-style mb-30">
                                                <div class="input-style-1">
                                                    <label>Name:</label>
                                                    <input type="text" id="courseName" name="courseName" placeholder="Add course name here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Learn:</label>
                                                    <input type="text" id="learnCourse" name="learnCourse" placeholder="MERN Stack, FULL Stack, Backend, Frontent etc.." />
                                                </div>

                                                <div class="input-style-1 me-5">
                                                    <label>Course Logo:</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="col-2">
                                                            <img id="coursePicture" src="{{ asset('storage/pictures/' . $user->picture )}}" alt="Selected Image" style="height: 200px; width: 150px; object-fit: cover; object-position: center;" />
                                                        </div>
                                                        <div class="col">
                                                            <div class="input-style-1">
                                                                <label for="courseImage" class="form-check-label">Select project photo:</label>
                                                                <input type="file" name="courseImage" id="courseImage" class="form-control form-control-file" accept="image/*">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Description:</label>
                                                    <textarea id="courseDescription" name="courseDescription" placeholder="Write about what the course you took contributed to you..." rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-4" id="buttonContainer">
                                        <!-- Button -->
                                        <button type="button" class="btn btn-secondary" onclick="addCourse()">Add more course</button>
                                    </div>
                                </div>
                                <!-- END OF SECTION -->
                                <!-- Divider Start -->
                                <div class="divider mb-5 mt-5"><hr /></div>
                                <!-- Divider End ####################################################### -->

                                <!-- SOCIAL MEDIA SECTION: -->
                                <div>
                                    <div class="title mb-30 d-flex justify-content-between align-items-center">
                                        <h6>Social media links:</h6>
                                    </div>

                                    <div class="row" id="portfolioContainer">
                                        <div class="col">
                                            <div class="card-style mb-30">
                                                <div class="input-style-1">
                                                    <label>Twitter:</label>
                                                    <input type="text" id="twitter" name="twitter" placeholder="Add twitter account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Facebook:</label>
                                                    <input type="text" id="facebook" name="facebook" placeholder="Add facebook account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Linkedin:</label>
                                                    <input type="text" id="linkedin" name="linkedin" placeholder="Add linkedin account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Instagram:</label>
                                                    <input type="text" id="instagram" name="instagram" placeholder="Add instagram account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Youtube:</label>
                                                    <input type="text" id="youtube" name="youtube" placeholder="Add youtube account link here.." />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF SECTION -->


                                <!-- #### Create button #### -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <!-- Send button -->
                                        <div>
                                            <input type="submit" class="btn btn-success btn-lg" value="Create Profile" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection


{{-- Spesific Footer JS includes: --}}
@section('footerJS')
    <script>
        // Open modal:
        function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        // Close modal:
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Expertise/Skill section start: ###################################################
        var nextCheckboxId = 5;
        function addSkill(type, skillName, containerId, modalClass, modalContentClass, closeButtonClass) {
            var skillInput = skillName.trim();
            if (skillInput === "") {
                alert("Lütfen bir yetenek adı girin.");
                return;
            }

            var checkBoxContainer = document.getElementById(containerId);

            // Yeni div elementini oluştur
            var newDiv = document.createElement("div");
            newDiv.className = "form-check checkbox-style mb-20 me-5";

            // Checkbox inputunu oluştur ve div içine ekle
            var newCheckbox = document.createElement("input");
            newCheckbox.className = "form-check-input";
            newCheckbox.type = "checkbox";
            newCheckbox.value = skillInput;
            newCheckbox.id = skillInput.toLowerCase() + "-" + nextCheckboxId; // skillInput'e göre ID'yi ata
            newCheckbox.name = (type === 'expertise') ? 'expertise[]' : 'skill[]'; // Name değerini belirle
            nextCheckboxId++; // Sonraki checkbox için ID değerini artır

            newDiv.appendChild(newCheckbox);

            // Label elementini oluştur ve içeriğini, 'for' özelliğini ve checkbox ID'sini ekleyerek div içine ekle
            var newLabel = document.createElement("label");
            newLabel.className = "form-check-label";
            newLabel.setAttribute("for", newCheckbox.id);
            newLabel.textContent = skillInput; // Label içeriği olarak skillInput değerini ekledim

            newDiv.appendChild(newLabel);

            // Silme butonunu oluştur
            var deleteButton = document.createElement("button");
            deleteButton.className = "btn btn-danger btn-sm ms-2";
            deleteButton.textContent = "X";
            deleteButton.style.marginLeft = "10px";
            deleteButton.onclick = function() {
                // Checkbox ve labeli sil
                newDiv.parentNode.removeChild(newDiv);
            };

            newDiv.appendChild(deleteButton);

            // CheckboxContainer'a yeni div'i ve bir satır boşluk ekleyin
            checkBoxContainer.appendChild(newDiv);
            checkBoxContainer.appendChild(document.createElement("br"));

            // Modal içeriği ve kapatma butonunu stillemek için sınıfları ekleyin
            var modal = document.querySelector("." + modalClass);
            var modalContent = modal.querySelector("." + modalContentClass);
            var closeButton = modal.querySelector("." + closeButtonClass);

            // Örnek olarak, stil sınıflarını güncelleyebilirsiniz
            modal.style.display = "block"; // Modalı göster

            // Kapatma butonuna tıklama olayını ekleyin
            closeButton.onclick = function() {
                modal.style.display = "none"; // Modalı gizle
            };

            // Eğer gerekirse skillInput değerini sıfırlayabilirsiniz, ancak bu işlemde bir etkisi yok gibi görünüyor
            document.querySelector('#skillInput1').value = '';
            document.querySelector('#skillInput2').value = '';
        }

        // Experience section start: ###################################################
        function addExperience() {
            // Create new experience div
            var newExperienceDiv = document.createElement('div');
            newExperienceDiv.classList.add('row', 'mt-4'); // Added 'row' class to make sure it behaves as expected with Bootstrap

            var colDiv = document.createElement('div');
            colDiv.classList.add('col');

            var cardStyleDiv = document.createElement('div');
            cardStyleDiv.classList.add('card-style', 'mb-30');

            var inputStyle1Position = createInputStyleX('Position', 'Add your position..');
            var inputStyle1Company = createInputStyleX('Company', 'Add your company..');
            var inputStyle1Years = createInputStyleX('Years', '');
            var inputStyle1Description = createInputStyleX('Description', 'Add your description..', 'textarea');

            cardStyleDiv.appendChild(inputStyle1Position);
            cardStyleDiv.appendChild(inputStyle1Company);
            cardStyleDiv.appendChild(inputStyle1Years);
            cardStyleDiv.appendChild(inputStyle1Description);

            colDiv.appendChild(cardStyleDiv);
            newExperienceDiv.appendChild(colDiv);

            // Insert new experience div after experienceContainer
            var experienceContainer = document.getElementById('experienceContainer');
            experienceContainer.insertAdjacentElement('afterend', newExperienceDiv);
        }

        // Helper function: Create Input or Textarea
        function createInputStyleX(labelText, placeholderText, elementType = 'input') {
            var inputDiv = document.createElement('div');
            inputDiv.classList.add('input-style-1');

            var label = document.createElement('label');
            label.textContent = labelText;

            var input;
            if (elementType === 'textarea') {
                input = document.createElement('textarea');
                input.setAttribute('placeholder', placeholderText);
                input.setAttribute('rows', '5');
            } else {
                input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('placeholder', placeholderText);
            }

            inputDiv.appendChild(label);
            inputDiv.appendChild(input);

            return inputDiv;
        }

        // Portfolio section start: ###################################################
        const projectImage = document.getElementById('projectImage');
        // Event listener for file input change
        const projectPhotoInput = document.getElementById('projectPhoto');
        projectPhotoInput.addEventListener('change', function() {
            const file = this.files[0]; // Get the selected file

            if (file) {
                const reader = new FileReader(); // Create a new FileReader instance

                // Define a function to handle FileReader onLoad event
                reader.onload = function(e) {
                    projectImage.src = e.target.result; // Set the src attribute of the image to the result of FileReader
                };

                // Read the file as Data URL (base64 encoded string)
                reader.readAsDataURL(file);
            } else {
                projectImage.src = ""; // If no file selected, clear the image src
            }
        });

        var defaultImageSrc = <?php echo json_encode(asset('storage/pictures/' . $user->picture)); ?>;
        function addProject() {
            // Create new project div
            var newProjectDiv = document.createElement('div');
            newProjectDiv.classList.add('row', 'mt-4'); // Added 'row' class to make sure it behaves as expected with Bootstrap

            var colDiv = document.createElement('div');
            colDiv.classList.add('col');

            var cardStyleDiv = document.createElement('div');
            cardStyleDiv.classList.add('card-style', 'mb-30');

            var inputStyle1Title = createInputStyle1('Title:', 'Add project title here..');
            var inputStyle1URL = createInputStyle1('URL:', 'Add project url here..');
            var inputStyle1Photo = createInputStyle1('Photo:', '', 'file');
            var inputStyle1Category = createSelectStyle1('Choose project category:', ['Category one', 'Category two', 'Category three']);
            var inputStyle1Description = createInputStyle1('Description:', 'Add portfolio description here..', 'textarea');

            cardStyleDiv.appendChild(inputStyle1Title);
            cardStyleDiv.appendChild(inputStyle1URL);

            // Photo section
            var photoDiv = document.createElement('div');
            photoDiv.classList.add('input-style-1', 'me-5');

            var photoLabel = document.createElement('label');
            photoLabel.textContent = 'Photo:';
            photoDiv.appendChild(photoLabel);

            var photoFlexDiv = document.createElement('div');
            photoFlexDiv.classList.add('d-flex', 'align-items-center');

            var photoCol1 = document.createElement('div');
            photoCol1.classList.add('col-2');

            var photoImg = document.createElement('img');
            photoImg.setAttribute('src', defaultImageSrc);
            photoImg.setAttribute('alt', '');
            photoImg.style.height = '200px';
            photoCol1.appendChild(photoImg);

            var photoCol2 = document.createElement('div');
            photoCol2.classList.add('col');

            var fileInputDiv = document.createElement('div');
            fileInputDiv.classList.add('input-style-1');

            var fileInputLabel = document.createElement('label');
            fileInputLabel.setAttribute('for', 'projecturl');
            fileInputLabel.classList.add('form-check-label');
            fileInputLabel.textContent = 'Select project photo:';

            var fileInput = document.createElement('input');
            fileInput.setAttribute('type', 'file');
            fileInput.setAttribute('name', 'projecturl');
            fileInput.setAttribute('id', 'projecturl');
            fileInput.classList.add('form-control', 'form-control-file');
            fileInput.setAttribute('accept', 'image/*');

            fileInput.addEventListener('change', function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        photoImg.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });

            fileInputDiv.appendChild(fileInputLabel);
            fileInputDiv.appendChild(fileInput);

            photoCol2.appendChild(fileInputDiv);

            photoFlexDiv.appendChild(photoCol1);
            photoFlexDiv.appendChild(photoCol2);

            photoDiv.appendChild(photoFlexDiv);
            cardStyleDiv.appendChild(photoDiv);

            cardStyleDiv.appendChild(inputStyle1Category);
            cardStyleDiv.appendChild(inputStyle1Description);

            colDiv.appendChild(cardStyleDiv);
            newProjectDiv.appendChild(colDiv);

            // Insert new project div after portfolioContainer
            var portfolioContainer = document.getElementById('portfolioContainer');
            portfolioContainer.insertAdjacentElement('afterend', newProjectDiv);
        }

        // Helper function: Create Input, File Input, or Textarea
        function createInputStyle1(labelText, placeholderText, elementType = 'input') {
            var inputDiv = document.createElement('div');
            inputDiv.classList.add('input-style-1');

            var label = document.createElement('label');
            label.textContent = labelText;

            var input;
            if (elementType === 'textarea') {
                input = document.createElement('textarea');
                input.setAttribute('placeholder', placeholderText);
                input.setAttribute('rows', '5');
            } else if (elementType === 'file') {
                input = document.createElement('input');
                input.setAttribute('type', 'file');
                input.setAttribute('placeholder', placeholderText);
                input.setAttribute('name', 'projecturl');
                input.setAttribute('id', 'projecturl');
                input.classList.add('form-control', 'form-control-file');
                input.setAttribute('accept', 'image/*');
                input.addEventListener('change', function() {
                    var file = this.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            photoImg.src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    }
                });
            } else {
                input = document.createElement('input');
                input.setAttribute('type', 'text');
                input.setAttribute('placeholder', placeholderText);
            }

            inputDiv.appendChild(label);
            inputDiv.appendChild(input);

            return inputDiv;
        }

        // Helper function: Create Select
        function createSelectStyle1(labelText, options) {
            var selectDiv = document.createElement('div');
            selectDiv.classList.add('input-style-1');

            var label = document.createElement('label');
            label.textContent = labelText;

            var select = document.createElement('select');
            select.classList.add('form-select');

            var defaultOption = document.createElement('option');
            defaultOption.value = '';
            defaultOption.textContent = 'Select category';
            select.appendChild(defaultOption);

            options.forEach(function(optionText) {
                var option = document.createElement('option');
                option.value = optionText;
                option.textContent = optionText;
                select.appendChild(option);
            });

            selectDiv.appendChild(label);
            selectDiv.appendChild(select);

            return selectDiv;
        }


        // Course section start: ###################################################
        // Course section start: ###################################################

        // Function to handle course logo file input change
        const courseImageInput = document.getElementById('courseImage');
        courseImageInput.addEventListener('change', function() {
            const file = this.files[0]; // Get the selected file

            if (file) {
                const reader = new FileReader(); // Create a new FileReader instance

                // Define a function to handle FileReader onLoad event
                reader.onload = function(e) {
                    const courseImagePreview = document.getElementById('coursePicture');
                    courseImagePreview.src = e.target.result; // Set the src attribute of the image to the result of FileReader
                };

                // Read the file as Data URL (base64 encoded string)
                reader.readAsDataURL(file);
            } else {
                const courseImagePreview = document.getElementById('coursePicture');
                courseImagePreview.src = defaultCourseImageSrc; // If no file selected, set default image
            }
        });

        // Default course image source
        var defaultCourseImageSrc = <?php echo json_encode(asset('storage/pictures/' . $user->picture)); ?>;

        function createCourseInput(labelText, placeholderText, type, id) {
            var inputDiv = document.createElement('div');
            inputDiv.classList.add('input-style-1');

            var label = document.createElement('label');
            label.textContent = labelText;

            var input;
            if (type === 'textarea') {
                input = document.createElement('textarea');
                input.setAttribute('placeholder', placeholderText);
                input.setAttribute('rows', '5');
            } else {
                input = document.createElement('input');
                input.setAttribute('type', type);
                input.setAttribute('placeholder', placeholderText);
            }
            input.setAttribute('id', id);
            input.setAttribute('name', id);
            input.classList.add('form-control');

            inputDiv.appendChild(label);
            inputDiv.appendChild(input);

            return inputDiv;
        }

        function addCourse() {
            // Create new course div
            var newCourseDiv = document.createElement('div');
            newCourseDiv.classList.add('row', 'mt-4');

            var colDiv = document.createElement('div');
            colDiv.classList.add('col');

            var cardStyleDiv = document.createElement('div');
            cardStyleDiv.classList.add('card-style', 'mb-30');

            var inputName = createCourseInput('Name:', 'Add course name here..', 'text', 'courseName');
            var inputLearn = createCourseInput('Learn:', 'MERN Stack, FULL Stack, Backend, Frontend etc..', 'text', 'learnCourse');

            // Logo section
            var logoDiv = document.createElement('div');
            logoDiv.classList.add('input-style-1', 'me-5');

            var logoLabel = document.createElement('label');
            logoLabel.textContent = 'Course Logo:';
            logoDiv.appendChild(logoLabel);

            var logoFlexDiv = document.createElement('div');
            logoFlexDiv.classList.add('d-flex', 'align-items-center');

            var logoCol1 = document.createElement('div');
            logoCol1.classList.add('col-2');

            var courseImagePreview = document.createElement('img');
            courseImagePreview.setAttribute('src', defaultCourseImageSrc);
            courseImagePreview.setAttribute('alt', 'Selected Image');
            courseImagePreview.style.height = '200px';
            courseImagePreview.style.width = '150px';
            courseImagePreview.style.objectFit = 'cover';
            courseImagePreview.style.objectPosition = 'center';
            courseImagePreview.setAttribute('id', 'coursePicture');
            logoCol1.appendChild(courseImagePreview);

            var logoCol2 = document.createElement('div');
            logoCol2.classList.add('col');

            var fileInputDiv = document.createElement('div');
            fileInputDiv.classList.add('input-style-1');

            var fileInputLabel = document.createElement('label');
            fileInputLabel.setAttribute('for', 'courseImage');
            fileInputLabel.classList.add('form-check-label');
            fileInputLabel.textContent = 'Select course logo:';

            var fileInput = document.createElement('input');
            fileInput.setAttribute('type', 'file');
            fileInput.setAttribute('name', 'courseImage');
            fileInput.setAttribute('id', 'courseImage');
            fileInput.classList.add('form-control', 'form-control-file');
            fileInput.setAttribute('accept', 'image/*');

            fileInput.addEventListener('change', function() {
                var file = this.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        courseImagePreview.src = e.target.result;
                    }
                    reader.readAsDataURL(file);
                }
            });

            fileInputDiv.appendChild(fileInputLabel);
            fileInputDiv.appendChild(fileInput);

            logoCol2.appendChild(fileInputDiv);

            logoFlexDiv.appendChild(logoCol1);
            logoFlexDiv.appendChild(logoCol2);

            logoDiv.appendChild(logoFlexDiv);

            var inputDescription = createCourseInput('Description:', 'Write about what the course you took contributed to you...', 'textarea', 'courseDescription');

            cardStyleDiv.appendChild(inputName);
            cardStyleDiv.appendChild(inputLearn);
            cardStyleDiv.appendChild(logoDiv);
            cardStyleDiv.appendChild(inputDescription);

            colDiv.appendChild(cardStyleDiv);
            newCourseDiv.appendChild(colDiv);

            // Insert new course div after courseContainer
            var courseContainer = document.getElementById('courseContainer');
            courseContainer.insertAdjacentElement('beforeend', newCourseDiv);
        }

    </script>
@endsection
