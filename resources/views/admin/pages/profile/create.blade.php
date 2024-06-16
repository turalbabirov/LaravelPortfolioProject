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

                                    <!-- Phone, Birthday, Address, About -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="input-style-1">
                                                <label>Address:</label>
                                                <input type="text" name="address" />
                                                @if ($errors->has('password'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="input-style-1">
                                                <label>Phone:</label>
                                                <input type="tel" name="phone" />
                                                @if ($errors->has('password'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="input-style-1">
                                                <label>Birthday:</label>
                                                <input type="date" name="birthday" />
                                                @if ($errors->has('password'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="input-style-1">
                                                <label>About:</label>
                                                <textarea name="about" id="about" cols="30" rows="11"></textarea>
                                                @if ($errors->has('password'))
                                                    <div>
                                                        <span class="text-danger">{{ $errors->first('password') }}</span>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Freelance -->
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
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">Degree:</div>
                                            <div class="select-style-2">
                                                <div class="select-position">
                                                    <select>
                                                        <option value="">Select category</option>
                                                        <option value="">Category one</option>
                                                        <option value="">Category two</option>
                                                        <option value="">Category three</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <div class="mb-3">Experience:</div>
                                            <div class="select-style-2">
                                                <div class="select-position">
                                                    <select>
                                                        <option value="">Select category</option>
                                                        <option value="">Category one</option>
                                                        <option value="">Category two</option>
                                                        <option value="">Category three</option>
                                                    </select>
                                                </div>
                                            </div>
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
                                        <div id="checkboxContainer1" class="col d-flex flex-wrap">
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                                                <label class="form-check-label" for="checkbox-1">
                                                    Front-End Developer</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-2" />
                                                <label class="form-check-label" for="checkbox-2">
                                                    Apps Developer</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-3" />
                                                <label class="form-check-label" for="checkbox-3">
                                                    Web Developer</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-4" />
                                                <label class="form-check-label" for="checkbox-4">
                                                    Apps Designer</label>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Modal -->
                                            <div id="myModal1" class="modal modal1">
                                                <!-- Modal içeriği -->
                                                <div class="modal-content modal-content1 p-5 input-style-1" >
                                                    <span class="close close1" onclick="closeModal('myModal1')" style="position: absolute; right: 30px; top: 0">&times;</span>
                                                    <input type="text" id="skillInput1" placeholder="Skill name..">
                                                    <button type="button" class="btn btn-light mt-3" onclick="addSkill(document.querySelector('#skillInput1').value, 'checkboxContainer1', 'modal1', 'modal-content1', 'close1')">Add skill</button>
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
                                        <div id="checkboxContainer2" class="col d-flex flex-wrap">
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-1" />
                                                <label class="form-check-label" for="checkbox-1">
                                                    HTML</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-2" />
                                                <label class="form-check-label" for="checkbox-2">
                                                    CSS</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-3" />
                                                <label class="form-check-label" for="checkbox-3">
                                                    PHP</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-4" />
                                                <label class="form-check-label" for="checkbox-4">
                                                    Javascript</label>
                                            </div>
                                            <div class="form-check checkbox-style mb-20 me-5">
                                                <input class="form-check-input" type="checkbox" value="" id="checkbox-5" />
                                                <label class="form-check-label" for="checkbox-5">
                                                    Angular Js</label>
                                            </div>
                                        </div>
                                        <div>
                                            <!-- Modal -->
                                            <div id="myModal2" class="modal modal2">
                                                <!-- Modal içeriği -->
                                                <div class="modal-content modal-content2 p-5 input-style-1" >
                                                    <span class="close close2" onclick="closeModal('myModal2')" style="position: absolute; right: 30px; top: 0">&times;</span>
                                                    <input type="text" id="skillInput2" placeholder="Skill name..">
                                                    <button type="button" class="btn btn-light mt-3" onclick="addSkill(document.querySelector('#skillInput2').value, 'checkboxContainer2', 'modal2', 'modal-content2', 'close2')">Add skill</button>
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
                                                    <input type="text" placeholder="Add your position.." />
                                                </div>
                                                <!-- end input -->

                                                <!-- input style start -->
                                                <div class="input-style-1">
                                                    <label>Company:</label>
                                                    <input type="text" placeholder="Add your company.." />
                                                </div>
                                                <!-- end input -->

                                                <!-- input style start -->
                                                <div class="input-style-1 me-5">
                                                    <label>Years:</label>
                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex">
                                                            <div class="mt-2">from</div>
                                                            <div class="input-style-2 ms-3">
                                                                <input type="date" />
                                                                <span class="icon"><i class="lni lni-chevron-down"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="ms-5"> </div>
                                                        <div class="d-flex">
                                                            <div class="mt-2">to</div>
                                                            <div class="input-style-2 ms-3">
                                                                <input type="date" />
                                                                <span class="icon"><i class="lni lni-chevron-down"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end input -->

                                                <!-- textarea style start -->
                                                <div class="input-style-1">
                                                    <label>Description:</label>
                                                    <textarea placeholder="Add your description.." rows="5"></textarea>
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
                                                    <input type="text" id="projectTitle" placeholder="Add project title here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>URL:</label>
                                                    <input type="text" id="projectUrl" placeholder="Add project url here.." />
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
                                                            <select id="projectCategory">
                                                                <option value="">Select category</option>
                                                                <option value="Category one">Category one</option>
                                                                <option value="Category two">Category two</option>
                                                                <option value="Category three">Category three</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Description:</label>
                                                    <textarea id="projectDescription" placeholder="Add portfolio description here.." rows="5"></textarea>
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

                                    <div class="row" id="portfolioContainer">
                                        <div class="col">
                                            <div class="card-style mb-30">
                                                <div class="input-style-1">
                                                    <label>Name:</label>
                                                    <input type="text" id="projectTitle" placeholder="Add course name here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Learn:</label>
                                                    <input type="text" id="projectUrl" placeholder="MERN Stack, FULL Stack, Backend, Frontent etc.." />
                                                </div>

                                                <div class="input-style-1 me-5">
                                                    <label>Course Logo:</label>
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
                                                    <label>Description:</label>
                                                    <textarea id="projectDescription" placeholder="Write about what the course you took contributed to you..." rows="5"></textarea>
                                                </div>
                                            </div>
                                        </div>
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
                                                    <input type="text" id="projectTitle" placeholder="Add twitter account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Facebook:</label>
                                                    <input type="text" id="projectTitle" placeholder="Add facebook account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Linkedin:</label>
                                                    <input type="text" id="projectTitle" placeholder="Add linkedin account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Instagram:</label>
                                                    <input type="text" id="projectTitle" placeholder="Add instagram account link here.." />
                                                </div>

                                                <div class="input-style-1">
                                                    <label>Youtube:</label>
                                                    <input type="text" id="projectTitle" placeholder="Add youtube account link here.." />
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

        // Skills section start: ###################################################
        var nextCheckboxId = 5;
        function addSkill(skillName, containerId, modalClass, modalContentClass, closeButtonClass) {
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
            newCheckbox.id = "checkbox-" + nextCheckboxId; // Yeni ID'yi ata
            nextCheckboxId++; // Sonraki checkbox için ID değerini artır

            newDiv.appendChild(newCheckbox);

            // Label elementini oluştur ve içeriğini ekleyerek div içine ekle
            var newLabel = document.createElement("label");
            newLabel.className = "form-check-label";
            newLabel.setAttribute("for", newCheckbox.id);
            newLabel.textContent = skillInput;

            newDiv.appendChild(newLabel);

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



        // X section start: ###################################################
    </script>
@endsection
