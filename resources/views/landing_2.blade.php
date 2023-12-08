<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>NIWA Landing</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/theme.css?ver=3.2.2') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/dashlite.css?ver=3.2.2') }}">
    <style>
        .preview-circle {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin-top: 10px;
        }

        .preview-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body class="nk-body npc-default pg-survey">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-split nk-split-page nk-split-lg">
                        <div
                            class="nk-split-content bg-dark is-dark p-5 d-flex justify-between flex-column text-center">
                            <a href="html/index.html" class="logo-link nk-sidebar-logo">
                                <img class="logo-light logo-img" src="{{ asset('assets/img/niwa_logo_main.png') }}"
                                    alt="logo">
                                <img class="logo-dark logo-img" src="{{ asset('assets/img/niwa_logo_main.png') }}"
                                    alt="logo-dark">
                            </a>
                            <div class="text-block wide-xs mx-auto">
                                <h3 class="text-white">Get Started</h3>
                                <p>We issue licenses for inland navigation, piers, jetties and dockyards; examine and
                                    survey inland watercraft and shipyard operators, grant permit and licenses for sand
                                    dredging, pipeline construction, dredging of slot and approve designs and
                                    construction of inland river crafts</p>
                                <img class="nk-survey-gfx mt-5"
                                    src="{{ asset('assets/frontend/images/gfx/job-survey.svg') }}" alt="">
                            </div>
                            <p>&copy; 2023 NIWA.</p>
                        </div><!-- .nk-split-content -->
                        <div
                            class="nk-split-content nk-split-stretch bg-white p-5 d-flex justify-center align-center flex-column">
                            <div class="wide-xs-fix">
                                <form class="nk-stepper stepper-init is-alter myFormClass" method="POST"
                                    action="{{ route('client_registration') }}" id="stepper-survey-v2">
                                    @csrf
                                    <div class="nk-stepper-content">
                                        <div class="nk-stepper-progress stepper-progress mb-4">
                                            <div class="stepper-progress-count mb-2"></div>
                                            <div class="progress progress-md">
                                                <div class="progress-bar stepper-progress-bar"></div>
                                            </div>
                                        </div>
                                        <div class="nk-stepper-steps stepper-steps">
                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">Class of Applicant ?</h5>
                                                    <p>What is the purpose of your application</p>
                                                </div>
                                                <ul class="row g-3">
                                                    <li class="col-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input"
                                                                name="applicant_class" id="applicant_class-pleasure"
                                                                value="pleasure" required>
                                                            <label class="custom-control-label"
                                                                for="applicant_class-pleasure">
                                                                <span
                                                                    class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img"
                                                                            src="./images/icons/fornt-end-developer.svg"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Pleasure</span>
                                                                    <span class="sub-text">Class A</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input"
                                                                name="applicant_class" id="applicant_class-domestic"
                                                                value="domestic" required>
                                                            <label class="custom-control-label"
                                                                for="applicant_class-domestic">
                                                                <span
                                                                    class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img"
                                                                            src="./images/icons/ux-designer.svg"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Domestic</span>
                                                                    <span class="sub-text">Class B.</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input"
                                                                name="applicant_class" id="applicant_class-community"
                                                                value="community" required>
                                                            <label class="custom-control-label"
                                                                for="applicant_class-community">
                                                                <span
                                                                    class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img"
                                                                            src="./images/icons/freelancing-service.svg"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Community</span>
                                                                    <span class="sub-text">Class C</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li class="col-6">
                                                        <div
                                                            class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                            <input type="radio" class="custom-control-input"
                                                                name="applicant_class" id="applicant_class-commercial"
                                                                value="commercial" required>
                                                            <label class="custom-control-label"
                                                                for="applicant_class-commercial">
                                                                <span
                                                                    class="d-flex flex-column text-center py-1 py-sm-2">
                                                                    <span class="icon-wrap xl">
                                                                        <img class="img"
                                                                            src="./images/icons/freelancing-service.svg"
                                                                            alt="">
                                                                    </span>
                                                                    <span class="lead-text mb-1 mt-3">Commercial</span>
                                                                    <span class="sub-text">Class D</span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>

                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">what are you applying for.?</h5>

                                                </div>
                                                <div class="row g-4">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="application_type">Select</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2"
                                                                    id="application_type" name="application_type"
                                                                    data-placeholder="click to select" required>
                                                                    <option value=""></option>
                                                                    <option value="right-of-way">Use of Right of Way
                                                                    </option>
                                                                    <option value="dredging-access-charge">Dredging
                                                                        Access Charge/Reclamation</option>
                                                                    <option value="waterway-operators-training">
                                                                        Training and Certification of Waterway Operators
                                                                    </option>
                                                                    <option value="issue-control-licenses">Issue and
                                                                        Control Licenses for Inland Navigation, Piers,
                                                                        Jetties, Dockyards</option>
                                                                    <option value="grant-licenses">Grant Licenses to
                                                                        Private Inland Waterway Operators</option>
                                                                    <option value="ferry-services">Ferry Services
                                                                        within the Inland Waterways System</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="office_close_by">Area
                                                                Offices Close to you</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select js-select2"
                                                                    id="office_close_by" name="office_close_by"
                                                                    data-placeholder="click to select" required>
                                                                    <option value=""></option>

                                                                    <option value="lagos">Lagos (Lagos AO)</option>
                                                                    <option value="benue">Benue (Makurdi AO)</option>
                                                                    <option value="kebbi">Kebbi (Yelwa AO)</option>
                                                                    <option value="adamawa">Adamawa (Yola AO)</option>
                                                                    <option value="niger">Niger (Baro Port, Minna AO)
                                                                    </option>
                                                                    <option value="bayelsa">Bayelsa (Yenagoa AO)
                                                                    </option>
                                                                    <option value="kano">Kano</option>
                                                                    <option value="rivers">Rivers (Port Harcourt AO)
                                                                    </option>
                                                                    <option value="anambra">Anambra (Onitsha AO/RP)
                                                                    </option>
                                                                    <option value="ogun">Ogun (Abeokuta AO)</option>
                                                                    <option value="cross-river">Cross River (Calabar
                                                                        AO)</option>
                                                                    <option value="sokoto">Sokoto (Sokoto AO)</option>
                                                                    <option value="taraba">Taraba (Jalingo AO)</option>
                                                                    <option value="kogi">Kogi (Lokoja AO)</option>
                                                                    <option value="delta">Delta (Warri AO)</option>
                                                                    <option value="kaduna">Kaduna (Kaduna AO)</option>
                                                                    <option value="akwa-ibom">Akwa Ibom (Eket AO)
                                                                    </option>
                                                                    <option value="imo">Imo (Oguta AO)</option>
                                                                    <option value="ondo">Ondo (Igbokoda AO)</option>
                                                                </select>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">Personal Info</h5>
                                                    <p>Basic information about you</p>
                                                </div>
                                                <div class="row g-3">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="last_name">Legal
                                                                Last Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="last_name" name="last_name"
                                                                    placeholder="Last name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="first_name">First of
                                                                Given Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="first_name" name="first_name"
                                                                    placeholder="First name" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="other_name">Middle
                                                                Name</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="other_name" name="other_name"
                                                                    placeholder="Other name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="email_address">Email
                                                                Address</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="email_address" name="email_address"
                                                                    placeholder="Email Address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="password">Password</label>
                                                            <div class="form-control-wrap">
                                                                <input type="password" class="form-control"
                                                                    id="password" name="password"
                                                                    placeholder="Password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label"
                                                                for="password_confirmation">Confirm Password</label>
                                                            <div class="form-control-wrap">
                                                                <input type="password" class="form-control"
                                                                    id="password_confirmation"
                                                                    name="password_confirmation"
                                                                    placeholder="Confirm Password" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label class="form-label">Upload Your Letter of
                                                                Intent</label>
                                                            <span class="form-note mb-2">(Files accepted: .pdf.
                                                                doc/docx - Max file size: 190k for demo limit)</span>
                                                            <div class="form-control-wrap">
                                                                <div class="form-file">
                                                                    <input type="file" multiple
                                                                        class="form-file-input"
                                                                        id="sv2-file-attachment"
                                                                        name="letter_of_intent_file"
                                                                        onchange="previewFile()">
                                                                    <label class="form-file-label"
                                                                        for="sv2-file-attachment">Choose
                                                                        files....</label>
                                                                </div>
                                                                <div class="preview-circle" id="file-preview"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-stepper-step">
                                                <div class="nk-stepper-step-head mb-4">
                                                    <h5 class="title">Permanent Physical Mailing Address</h5>
                                                    {{-- <p>Tation argumentum et usu, dicit viderer evertitur te has</p> --}}
                                                </div>



                                                <div class="row g-3">
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="street">Street &
                                                                Number</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="street" name="street"
                                                                    placeholder="Street no/address" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="city">
                                                                City</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="city" name="city" placeholder="City"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="lga">
                                                                L.G.A</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="lga" name="lga"
                                                                    placeholder="Local governmaent Area" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="state">State</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="state" name="state" placeholder="State"
                                                                    required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="country">Country</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="country" name="country"
                                                                    placeholder="Country" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="phone_number">Phone
                                                                No</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="phone_number" name="phone_number"
                                                                    placeholder="Phone number" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label class="form-label" for="alternate_phone_number">
                                                                Alternative
                                                                Phone No</label>
                                                            <div class="form-control-wrap">
                                                                <input type="text" class="form-control"
                                                                    id="alternate_phone_number"
                                                                    name="alternate_phone_number"
                                                                    placeholder="Alternate number">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-12">
                                                        <div class="form-group">
                                                            <label class="form-label" for="date_of_birth">Date of
                                                                birth</label>
                                                            <div class="form-control-wrap">
                                                                <input type="date" class="form-control"
                                                                    id="date_of_birth" name="date_of_birth"
                                                                    placeholder="Date of Birth">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                <li class="step-prev">
                                                    <button class="btn btn-dim btn-primary">Back</button>
                                                </li>
                                                <li class="step-next">
                                                    <button class="btn btn-primary">Continue</button>
                                                </li>
                                                <li class="step-submit">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </li>
                                            </ul>
                                        </div>
                                </form>
                            </div>
                        </div><!-- .nk-split-content -->
                    </div><!-- .nk-split -->
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script>
        const myForm = document.querySelector('.myFormClass');
        const submitButton = myForm.querySelector('button[type="submit"]');

        submitButton.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent default form submission on button click  
            myForm.submit(); // Forcefully submit the form
        });

        function previewFile() {
            var input = document.getElementById('sv2-file-attachment');
            var preview = document.getElementById('file-preview');

            // Clear previous preview
            preview.innerHTML = '';

            // Check if any file is selected
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    var fileType = input.files[0].type;

                    // Check if the file type is supported (you can add more types if needed)
                    if (fileType === 'application/pdf' || fileType === 'application/msword' || fileType ===
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' || fileType ===
                        'application/vnd.apple.pages') {
                        if (fileType === 'application/pdf') {
                            // Handle PDF preview (you can use a PDF.js library for this)
                            // For simplicity, let's just display a message here
                            preview.innerHTML = 'PDF file preview is not implemented';
                        } else {
                            // Create an image element and set the source to the preview
                            var image = document.createElement('img');
                            image.src = e.target.result;

                            // Append the image to the preview div
                            preview.appendChild(image);
                        }
                    } else {
                        preview.innerHTML = 'Unsupported file type';
                    }
                };

                // Read the file as a data URL
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    <script src="{{ asset('assets/frontend/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js?ver=3.2.2') }}"></script>
    {{-- <script src="{{ asset('assets/frontend/js/libs/tagify.js?ver=3.2.2') }}"></script> --}}

</html>
