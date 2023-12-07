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
        @media (min-width: 768px) {
            body {
            margin: 0;
            overflow: hidden;
            /* Prevent scrolling */
        }

        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            /* Full viewport height */
            overflow: hidden;
        }

        .text-section,
        .action-section {
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
            width: 50%;
            padding: 20px;
            color: white;
        }

        
        .action-section {
            right: 0;
            text-align: center;
        }

        .form-card {
            padding: 20px;
            margin-top: 20px;
        }

        .center-viewport {
            display: flex;
            justify-content: center;
            align-items: center;
            /* height: 100vh; */
        }
        }
    </style>
</head>

<body class="">
    <div class="hero">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 bg-dark is-dark p-5 d-flex justify-between flex-column text-center">
                    <a href="html/index.html" class="logo-link nk-sidebar-logo">
                        <img class="logo-light logo-img" src="{{ asset('assets/img/niwa_logo_main.png') }}"
                            alt="logo">
                        <img class="logo-dark logo-img" src="{{ asset('assets/img/niwa_logo_main.png') }}"
                            alt="logo-dark">
                    </a>
                    <div class="pt-3 pb-3 text-block wide-xs mx-auto">
                        <h3 class="pt-3 pb-3 text-white">Get Started</h3>
                        <p>Tation argumentum et usu, dicit viderer evertitur te has. Eu dictas concludaturque
                            usu, facete detracto patrioque an per, lucilius pertinacia eu vel.</p>
                        <img class="pb-5 nk-survey-gfx mt-5" src="{{ asset('assets/frontend/images/gfx/job-survey.svg') }}"
                            alt="">
                    </div>
                    <p class="fixed-bottom">&copy; 2023 NIWA.</p>
                </div>


                <div class="col-md-7  action-section">
                    <button class="show-buttons p-2 m-3 btn btn-info">
                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                            <input type="radio" class="custom-control-input" name="sv2-preference"
                                id="sv2-preference-freelance" value="sv2-preference-freelance" required>
                            <label class="custom-control-label" for="sv2-preference-freelance">
                                <span class="d-flex flex-column text-center py-1 py-sm-2">
                                    <span class="icon-wrap xl">
                                        <img class="img" src="./images/icons/freelancing-service.svg" alt="">
                                    </span>
                                    <span class="lead-text mb-1 mt-3">david's Form</span>
                                    <span class="sub-text">Prioritize and solve your tasks in short time cycles.</span>
                                </span>
                            </label>
                        </div>
                    </button>
                    <button class="show-buttons p-2 m-3 btn btn-info">
                        <div class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                            <input type="radio" class="custom-control-input" name="sv2-preference"
                                id="sv2-preference-freelance" value="sv2-preference-freelance" required>
                            <label class="custom-control-label" for="sv2-preference-freelance">
                                <span class="d-flex flex-column text-center py-1 py-sm-2">
                                    <span class="icon-wrap xl">
                                        <img class="img" src="./images/icons/freelancing-service.svg" alt="">
                                    </span>
                                    <span class="lead-text mb-1 mt-3">Ozo's Form</span>
                                    <span class="sub-text">Prioritize and solve your tasks in short time cycles.</span>
                                </span>
                            </label>
                        </div>
                    </button>                    
                </div>

                <div id="form1" class="col-md-7 " style="display: none;">
                    <div class="card form-card col-md-10">
                        <div class="card-body">
                            <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="#"
                                id="stepper-create-project">
                                <div class="row g-0 col-sep col-sep-md col-sep-xl">
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card-inner">
                                            <ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-vr">
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Intro</div>
                                                            <div class="sub-text">Name Your Project</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Project Template</div>
                                                            <div class="sub-text">Define Project Manage Style</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Team Members</div>
                                                            <div class="sub-text">Select who is working</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">More Info</div>
                                                            <div class="sub-text">Looking for more information</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Completed</div>
                                                            <div class="sub-text">Review and Submit</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xl-8">
                                        <div class="card-inner">
                                            <div class="nk-stepper-content">
                                                <div class="nk-stepper-steps stepper-steps">
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">New Project Details</h5>
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-name">Project Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="cp1-project-name"
                                                                            name="cp1-project-name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-description">Project
                                                                        Description</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="form-control form-control-sm" id="cp1-project-description" name="cp1-project-description"
                                                                            placeholder="Write Project Description" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Project Type</label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group">
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-project-type"
                                                                                        id="cp1-public-project"
                                                                                        value="public_project"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-public-project">Public
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-project-type"
                                                                                        id="cp1-private-project"
                                                                                        value="private_project"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-private-project">Private
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-4">Project Template</h5>
                                                        <ul class="row g-3">
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-scrum"
                                                                        value="cp1-template-scrum" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-scrum">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-info">
                                                                                <svg viewBox="0 0 44 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m16.44 29.431c0.1712-0.6749 0.2662-1.2548 0.5229-1.8727 0.4278-1.0647 1.2643-1.7016 2.4146-1.8537 0.1901-0.0285 0.4277 0.038 0.5798 0.1426 0.5609 0.3707 1.1123 0.7795 1.6446 1.1882 0.2662 0.1997 0.4753 0.1902 0.732 0 0.5799-0.4182 1.1598-0.827 1.7586-1.2167 0.1426-0.0951 0.3518-0.1426 0.5229-0.1331 1.3118 0.1426 2.367 1.1217 2.6712 2.4145 0.0476 0.2187-0.0665 0.2662-0.1901 0.3518-1.1122 0.6844-1.6826 1.3594-3.4317 1.7586-3.755 0.6845-4.8767-0.2186-6.9776-0.6559-0.057 0.0095-0.1141-0.1046-0.2472-0.1236z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m19.615 21.265v-0.1806c0-0.5893 0.0856-0.7224 0.6274-0.9411 0.0666-0.0285 0.1616-0.0095 0.2282 0.019 1.0932 0.4944 2.1864 0.4373 3.2891 0.0571 0.3898-0.1331 0.713 0.0855 0.694 0.4943-0.0285 0.5799 0 1.1788-0.1521 1.7301-0.4943 1.7682-2.4621 2.4051-3.755 1.2643-0.5703-0.5038-0.8555-1.1502-0.9221-1.9012-0.0095-0.1806 0-0.3612-0.0095-0.5419 0.0095 0 0.0095 0 0 0z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m24.701 19.697c-0.0855-0.0761-0.1521-0.1141-0.2091-0.1807-0.1901-0.2186-0.3993-0.2376-0.6654-0.1235-0.713 0.3232-1.464 0.5038-2.253 0.3327-0.3232-0.0666-0.6559-0.1616-0.9316-0.3232-0.3137-0.1807-0.5419-0.1807-0.7795 0.0855-0.0856 0.0951-0.2092 0.1521-0.3232 0.2282-0.2662-0.751-0.1331-1.426 0.4563-1.9393 0.9886-0.8651 2.1484-1.1883 3.4412-0.9221 0.1616 0.038 0.3232 0.2091 0.4468 0.3517 0.2091 0.2377 0.3517 0.5324 0.5799 0.7415 0.5989 0.5514 0.6939 1.0267 0.2376 1.7492z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m20.965 24.935h2.0438c0.0476 0.1711 0.1046 0.3803 0.1712 0.6274-0.3518 0.2472-0.713 0.5039-1.0742 0.732-0.0666 0.0475-0.2187 0.019-0.3042-0.038-0.2472-0.1616-0.4754-0.3518-0.7225-0.5134-0.1997-0.1235-0.2947-0.2566-0.1806-0.4943 0.0475-0.1045 0.057-0.2471 0.0665-0.3137z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m3.749 9.877c0.08556-0.42778 0.13309-0.86507 0.24716-1.2928 0.77001-2.8899 2.5477-4.9052 5.3235-6.0364 0.10457-0.04753 0.21864-0.08555 0.39926-0.1521-0.35173-0.25666-0.66543-0.49432-1.0172-0.74148 0.38975-0.55136 0.76049-1.0932 1.1502-1.6541 0.10457 0.066543 0.19959 0.12358 0.28519 0.18062 0.9031 0.63692 1.8157 1.2643 2.7188 1.9012 0.6084 0.42778 0.7224 0.91259 0.3517 1.5685-0.5609 0.98865-1.1217 1.9773-1.7016 3.004-0.5989-0.34222-1.1788-0.67494-1.7777-1.0076 0.23765-0.42778 0.46577-0.82704 0.69397-1.2453-1.8252 0.09507-4.1828 2.7663-4.5345 5.1238-0.4658 3.099 1.1788 6.141 3.8405 7.1487 2.6618-5.5041 6.9205-8.3845 13.128-7.8331 4.8577 0.42778 9.183 4.0591 10.457 8.7552 1.5685 5.7512-0.2471 10.39-4.9052 14.022h8.5746c-0.2852-0.3327-0.5418-0.6369-0.8175-0.9506 0.5228-0.4373 1.0172-0.8555 1.578-1.3308 0.0571 0.0855 0.0951 0.1711 0.1521 0.2376 0.6654 0.789 1.3499 1.5685 2.0153 2.3575 0.4563 0.5419 0.4563 1.0267-0.019 1.5591-0.7415 0.8175-1.4925 1.6255-2.2434 2.4336-0.0191 0.0285-0.0571 0.038-0.1141 0.076-0.4848-0.4468-0.9697-0.8936-1.4735-1.3499 0.2662-0.2852 0.5038-0.5608 0.789-0.8746h-28.557v-2.1198h6.1315c-0.8556-0.751-1.6731-1.4735-2.5382-2.2435 0.5704-0.4848 1.0742-0.9031 1.5971-1.3499 2.2815 2.5097 5.1048 3.774 8.508 3.6124 2.4716-0.1236 4.6391-1.0552 6.4547-2.7378 3.6599-3.3842 4.4394-8.7932 1.8918-13.052-2.5002-4.1828-7.6145-6.0935-12.196-4.5535-4.7911 1.6161-7.4528 6.2266-7.1106 10.571 0.3042-0.3327 0.5894-0.6559 0.8936-0.9982 0.5323 0.5704 0.9791 1.0552 1.4639 1.5781-0.7605 0.7795-1.5875 1.635-2.4336 2.4621-0.3232 0.3232-0.8175 0.3042-1.2548-0.0095-0.96963-0.6845-1.9203-1.3879-2.9279-2.1199 0.39926-0.5514 0.78901-1.0932 1.1978-1.6541 0.3137 0.2282 0.6179 0.4373 0.95062 0.675 0.01901-0.1046 0.02852-0.1712 0.03802-0.2472 0.06655-0.8651 0.13309-1.7301 0.20914-2.5857 0.01901-0.1996-0.00951-0.3137-0.21864-0.4088-2.985-1.3879-4.6961-3.7074-5.1429-6.968-0.00951-0.057-0.03802-0.1046-0.05704-0.1616v-1.5876z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="lead-text mb-1 mt-3">Scrum</span>
                                                                            <span class="sub-text">Prioritize and solve
                                                                                your tasks in short time cycles.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-kanban"
                                                                        value="cp1-template-kanban" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-kanban">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-danger">
                                                                                <svg viewBox="0 0 44 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m43.554 9.7467h-11.869v26.253h-2.5153v-26.231h-14.418v26.231h-2.5153v-26.253h-11.779v-2.5265h11.745v-7.2202h2.5265v7.1753h14.396v-7.1753h2.5265v7.209h11.892c0.0112 0.8534 0.0112 1.6956 0.0112 2.5377z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m43.554 18.337c-0.1347 0.393-0.2246 0.8197-0.4155 1.179-0.6625 1.2913-1.7404 2.0324-3.1778 2.0773-1.864 0.0562-3.728 0.0225-5.6032 0.0225-0.0337 0-0.0786-0.0225-0.1347-0.0337v-9.3088h9.3312v6.0637zm-6.8047 0.7523c1.0892 0 2.1335 0.0337 3.189-0.0112 0.6064-0.0225 1.0667-0.5727 1.1004-1.1903 0.0113-0.2807 0-0.5615 0-0.8422v-2.2121h-4.2894v4.2558z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m43.554 4.6936h-9.32v-2.5265h9.32v2.5265z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m17.301 21.627v-9.3312h9.2863c0.0113 0.0786 0.0337 0.1572 0.0337 0.2358 0 1.5159 0.0225 3.0318 0 4.5477-0.0449 2.5041-2.0437 4.5028-4.5477 4.5365-1.5721 0.0224-3.1553 0.0112-4.7723 0.0112zm2.5265-2.5265c0.7636 0 1.4822 0.0112 2.1896 0 1.0106-0.0224 1.8865-0.685 2.01-1.6843 0.1123-0.8534 0.0225-1.7181 0.0225-2.5827h-4.2333c0.0112 1.4261 0.0112 2.8185 0.0112 4.267z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m26.621 24.187c0 1.6731 0.0449 3.3238-0.0112 4.9632-0.0786 2.2683-1.9314 4.1884-4.2221 4.3232-1.6731 0.0898-3.3687 0.0224-5.0755 0.0224v-9.2975c3.0992-0.0113 6.1984-0.0113 9.3088-0.0113zm-6.7935 6.7823h0.3481c0.6288 0 1.2576 0.0112 1.8865 0 0.9544-0.0224 1.8191-0.6625 1.9426-1.6057 0.1123-0.8759 0.0224-1.7742 0.0224-2.6613h-4.2108c0.0112 1.4373 0.0112 2.8297 0.0112 4.267z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m0.44629 21.627v-9.32h9.2077c0.01123 0.0112 0.03369 0.0337 0.03369 0.0562-0.01123 1.7517 0.10106 3.5146-0.06738 5.2551-0.22457 2.1896-1.8752 3.6943-4.0536 3.975-0.22458 0.0337-0.44916 0.0225-0.67374 0.0225-1.471 0.0112-2.942 0.0112-4.4467 0.0112zm2.5377-6.8047v4.267c0.78603 0 1.5608 0.0561 2.3244-0.0112 0.88709-0.0786 1.5833-0.5952 1.7405-1.471 0.16843-0.8983 0.11229-1.8528 0.1572-2.7736-1.4598-0.0112-2.8297-0.0112-4.2221-0.0112z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m9.7551 4.6936h-9.2751v-2.4928h9.2751v2.4928z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m17.312 2.1783h9.2863v2.4928h-9.2863v-2.4928z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="lead-text mb-1 mt-3">Kanban</span>
                                                                            <span class="sub-text">Keep a constant
                                                                                workflow on independent tasks.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-duplicate"
                                                                        value="cp1-template-duplicate" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-duplicate">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-primary">
                                                                                <svg viewBox="0 0 44 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m4.0054 20.544v-13.86c0-1.0711 0.47129-1.5424 1.5317-1.5424h27.795c1.0389 0 1.5209 0.48199 1.5209 1.5317v27.795c0 1.039-0.482 1.5317-1.5209 1.5317h-27.795c-1.0604-0.0107-1.5317-0.4927-1.5317-1.5531v-13.903zm28.256-12.8h-25.653v25.653h25.653v-25.653z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m37.424 2.5707h-0.5784-26.146c-0.225 0-0.4606-0.01071-0.6748-0.07497-0.58915-0.18209-0.95333-0.7712-0.87835-1.371 0.07497-0.59983 0.57839-1.0711 1.189-1.114 0.1178-0.010711 0.2356 0 0.3642 0 9.2436-0.010711 18.477-0.010711 27.72-0.010711 1.1139 0 1.5745 0.46058 1.5745 1.5852v27.667c0 0.2357-0.0107 0.482-0.075 0.7069-0.1714 0.5784-0.7498 0.9319-1.3389 0.8676-0.5998-0.0642-1.0925-0.5569-1.1461-1.1568-0.0107-0.1499-0.0107-0.2892-0.0107-0.4391v-26.146-0.51414z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m20.715 21.851v5.1091c0 0.6213-0.3642 1.0926-0.9319 1.264-0.5248 0.1606-1.1139-0.0322-1.4031-0.5142-0.1393-0.2356-0.225-0.5462-0.225-0.8247-0.0214-1.5103-0.0107-3.0206-0.0107-4.5415v-0.4927h-0.4498-5.8162c-0.8569 0-1.4353-0.5249-1.446-1.2747 0-0.7605 0.5784-1.2853 1.4246-1.296h6.2874v-0.4392c0-1.5638-0.0107-3.1276 0-4.7021 0-0.6855 0.4927-1.2211 1.1461-1.2854 0.632-0.0642 1.2211 0.3428 1.3817 0.9747 0.0429 0.1607 0.0429 0.3428 0.0429 0.5142v4.4558 0.4713h0.4606 5.9446c0.6213 0 1.114 0.3963 1.2639 0.9747 0.1393 0.5248-0.0749 1.1139-0.5677 1.3817-0.2463 0.1286-0.5569 0.2035-0.8354 0.2035-1.928 0.0215-3.856 0.0107-5.784 0.0107-0.1393 0.0108-0.2892 0.0108-0.482 0.0108z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span class="lead-text mb-1 mt-3">Duplicate
                                                                                Project</span>
                                                                            <span class="sub-text">Start clean and keep
                                                                                your configuration.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-import"
                                                                        value="cp1-template-import" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-import">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-success">
                                                                                <svg viewBox="0 0 45 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m7.721 5.5404c0.03454-0.71378 0.02302-1.393 0.11512-2.0608 0.28782-1.9111 1.9802-3.3962 3.9143-3.4653 0.4951-0.023025 1.0016-0.011513 1.5082-0.011513h20.631c2.0838 0 3.7301 1.2549 4.2021 3.2235 0.0921 0.39143 0.1037 0.79437 0.1267 1.1973 0.023 0.35689 0 0.71378 0 1.1398 0.6101 0 1.1858-0.05757 1.7614 0.01151 2.1759 0.24176 3.7071 1.9341 3.7646 4.133 0.0231 0.94408 0.0116 1.8996 0 2.8436-0.0115 0.8289-0.6332 1.4506-1.416 1.4276-0.7714-0.023-1.3355-0.6332-1.3355-1.4506v-2.6709c0-1.0016-0.5526-1.5427-1.5542-1.5427h-32.892c-1.0016 0-1.5427 0.5411-1.5427 1.5542v21.805c0 1.0361 0.52958 1.5657 1.5772 1.5657h32.857c1.0246 0 1.5657-0.5526 1.5657-1.5887v-13.688c0-1.1283 1.0707-1.8075 2.0263-1.2894 0.4835 0.2648 0.7253 0.6907 0.7253 1.2318 0 4.6511 0.023 9.3022-0.0116 13.942-0.023 2.3831-1.8535 4.1445-4.2481 4.1445-10.995 0.0116-21.989 0.0116-32.984 0-2.4752 0-4.2827-1.8305-4.2827-4.2942v-21.839c0-2.4867 1.8075-4.2942 4.2942-4.3172h1.1973zm27.734-0.01151v-1.0246c0-1.2434-0.4835-1.7269-1.7153-1.7269h-21.483c-0.1382 0-0.2878-0.01151-0.426 0-0.6332 0.04605-1.1512 0.44899-1.2318 1.0707-0.0806 0.5526-0.0231 1.1052-0.0231 1.6808h24.879z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m24.368 25.71c0.1842-0.1727 0.2878-0.2648 0.3914-0.3569 0.9325-0.9325 1.8766-1.8765 2.8091-2.809 0.5986-0.5872 1.4506-0.6102 2.0032-0.0691 0.5526 0.5526 0.5411 1.416-0.0461 2.0032l-5.4915 5.4915c-0.6447 0.6447-1.4506 0.6332-2.0953-0.0115-1.8075-1.796-3.6034-3.6035-5.3994-5.411-0.6217-0.6331-0.6332-1.4621-0.0461-2.0377 0.5757-0.5526 1.3815-0.5181 2.0032 0.0921 1.0131 1.0016 2.0147 2.0147 3.1199 3.1199v-0.5986c0-4.1446-0.0115-8.2891 0.0116-12.434 0-0.3684 0.1151-0.7713 0.2993-1.0821 0.2993-0.4951 0.898-0.6563 1.4391-0.4951 0.5756 0.1727 0.944 0.6217 0.9901 1.2203 0.0115 0.1727 0.0115 0.3454 0.0115 0.5181v12.261 0.5986z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span class="lead-text mb-1 mt-3">Import
                                                                                Project</span>
                                                                            <span class="sub-text">Prioritize and solve
                                                                                your tasks in short time cycles.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-4">Team Members</h5>
                                                        <ul class="row g-3">
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-1"
                                                                        value="cp1-team-1" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-1">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/c-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Keith
                                                                                    Jensen</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-2"
                                                                        value="cp1-team-2" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-2">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/b-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Stefan
                                                                                    Zakrisson</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-3"
                                                                        value="cp1-team-3" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-3">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq bg-purple">
                                                                                <span>DM</span>
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Daisy
                                                                                    Morgan</span>
                                                                                <span class="sub-text">UI/UX
                                                                                    Designer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-4"
                                                                        value="cp1-team-4" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-4">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/a-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Stefan
                                                                                    Harary</span>
                                                                                <span class="sub-text">Software
                                                                                    Engineer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-5"
                                                                        value="cp1-team-5" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-5">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/d-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Michiel
                                                                                    Berende</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-6"
                                                                        value="cp1-team-6" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-6">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq bg-warning">
                                                                                <span>JR</span>
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Jonathan
                                                                                    Rios</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">More Info</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-client">Client</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="cp1-project-client"
                                                                            name="cp1-project-client"
                                                                            placeholder="Client or Company name"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-lead">Lead</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select js-select2"
                                                                            id="cp1-project-lead"
                                                                            name="cp1-project-lead"
                                                                            data-placeholder="Select Lead" required>
                                                                            <option value=""></option>
                                                                            <option value="Keith_Jensen">Keith Jensen
                                                                            </option>
                                                                            <option value="Stefan_Zakrisson">Stefan
                                                                                Zakrisson</option>
                                                                            <option value="Daisy_Morgan">Daisy Morgan
                                                                            </option>
                                                                            <option value="Stefan_Harary">Stefan Harary
                                                                            </option>
                                                                            <option value="Michiel_Berende">Michiel
                                                                                Berende</option>
                                                                            <option value="Jonathan_Rios">Jonathan Rios
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-deadline">Deadline</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text"
                                                                            class="form-control date-picker"
                                                                            id="cp1-project-deadline"
                                                                            name="cp1-project-deadline"
                                                                            placeholder="mm/dd/yyyy" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-tags">Tags</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" placeholder="Add Tags"
                                                                            class="form-control js-tagify tagify"
                                                                            id="cp1-project-tags"
                                                                            name="cp1-project-tags" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Project Action</label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group gx-4">
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-follow-project"
                                                                                        id="cp1-follow-project"
                                                                                        value="follow_project">
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-follow-project">Follow
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-save-project"
                                                                                        id="cp1-save-project"
                                                                                        value="save_project">
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-save-project">Save
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step text-center">
                                                        <h5 class="title mb-2">Successfully created!</h5>
                                                        <p class="text-soft">Successfully created your project to
                                                            kickstart now </p>
                                                        <div class="gfx w-50 mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                    <li class="step-prev"><button
                                                            class="btn btn-dim btn-primary">Prev</button></li>
                                                    <li class="step-next"><button
                                                            class="btn btn-primary">Next</button></li>
                                                    <li class="step-submit"><button
                                                            class="btn btn-primary">Submit</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="form2" class="col-md-7 " style="display: none;">
                    <div class="card form-card col-md-10">
                        <div class="card-body">
                            <form class="nk-stepper stepper-init is-alter nk-stepper-s1" action="#"
                                id="stepper-create-project">
                                <div class="row g-0 col-sep col-sep-md col-sep-xl">
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card-inner">
                                            <ul class="nk-stepper-nav nk-stepper-nav-s1 stepper-nav is-vr">
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Intro</div>
                                                            <div class="sub-text">Name Your Project</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Project Template</div>
                                                            <div class="sub-text">Define Project Manage Style</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Team Members</div>
                                                            <div class="sub-text">Select who is working</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">More Info</div>
                                                            <div class="sub-text">Looking for more information</div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="step-item">
                                                        <div class="step-text">
                                                            <div class="lead-text">Completed</div>
                                                            <div class="sub-text">Review and Submit</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xl-8">
                                        <div class="card-inner">
                                            <div class="nk-stepper-content">
                                                <div class="nk-stepper-steps stepper-steps">
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">New Project Details</h5>
                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-name">Project Name</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="cp1-project-name"
                                                                            name="cp1-project-name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-description">Project
                                                                        Description</label>
                                                                    <div class="form-control-wrap">
                                                                        <textarea class="form-control form-control-sm" id="cp1-project-description" name="cp1-project-description"
                                                                            placeholder="Write Project Description" required></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Project Type</label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group">
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-project-type"
                                                                                        id="cp1-public-project"
                                                                                        value="public_project"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-public-project">Public
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-radio">
                                                                                    <input type="radio"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-project-type"
                                                                                        id="cp1-private-project"
                                                                                        value="private_project"
                                                                                        required>
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-private-project">Private
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-4">Project Template</h5>
                                                        <ul class="row g-3">
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-scrum"
                                                                        value="cp1-template-scrum" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-scrum">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-info">
                                                                                <svg viewBox="0 0 44 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m16.44 29.431c0.1712-0.6749 0.2662-1.2548 0.5229-1.8727 0.4278-1.0647 1.2643-1.7016 2.4146-1.8537 0.1901-0.0285 0.4277 0.038 0.5798 0.1426 0.5609 0.3707 1.1123 0.7795 1.6446 1.1882 0.2662 0.1997 0.4753 0.1902 0.732 0 0.5799-0.4182 1.1598-0.827 1.7586-1.2167 0.1426-0.0951 0.3518-0.1426 0.5229-0.1331 1.3118 0.1426 2.367 1.1217 2.6712 2.4145 0.0476 0.2187-0.0665 0.2662-0.1901 0.3518-1.1122 0.6844-1.6826 1.3594-3.4317 1.7586-3.755 0.6845-4.8767-0.2186-6.9776-0.6559-0.057 0.0095-0.1141-0.1046-0.2472-0.1236z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m19.615 21.265v-0.1806c0-0.5893 0.0856-0.7224 0.6274-0.9411 0.0666-0.0285 0.1616-0.0095 0.2282 0.019 1.0932 0.4944 2.1864 0.4373 3.2891 0.0571 0.3898-0.1331 0.713 0.0855 0.694 0.4943-0.0285 0.5799 0 1.1788-0.1521 1.7301-0.4943 1.7682-2.4621 2.4051-3.755 1.2643-0.5703-0.5038-0.8555-1.1502-0.9221-1.9012-0.0095-0.1806 0-0.3612-0.0095-0.5419 0.0095 0 0.0095 0 0 0z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m24.701 19.697c-0.0855-0.0761-0.1521-0.1141-0.2091-0.1807-0.1901-0.2186-0.3993-0.2376-0.6654-0.1235-0.713 0.3232-1.464 0.5038-2.253 0.3327-0.3232-0.0666-0.6559-0.1616-0.9316-0.3232-0.3137-0.1807-0.5419-0.1807-0.7795 0.0855-0.0856 0.0951-0.2092 0.1521-0.3232 0.2282-0.2662-0.751-0.1331-1.426 0.4563-1.9393 0.9886-0.8651 2.1484-1.1883 3.4412-0.9221 0.1616 0.038 0.3232 0.2091 0.4468 0.3517 0.2091 0.2377 0.3517 0.5324 0.5799 0.7415 0.5989 0.5514 0.6939 1.0267 0.2376 1.7492z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m20.965 24.935h2.0438c0.0476 0.1711 0.1046 0.3803 0.1712 0.6274-0.3518 0.2472-0.713 0.5039-1.0742 0.732-0.0666 0.0475-0.2187 0.019-0.3042-0.038-0.2472-0.1616-0.4754-0.3518-0.7225-0.5134-0.1997-0.1235-0.2947-0.2566-0.1806-0.4943 0.0475-0.1045 0.057-0.2471 0.0665-0.3137z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m3.749 9.877c0.08556-0.42778 0.13309-0.86507 0.24716-1.2928 0.77001-2.8899 2.5477-4.9052 5.3235-6.0364 0.10457-0.04753 0.21864-0.08555 0.39926-0.1521-0.35173-0.25666-0.66543-0.49432-1.0172-0.74148 0.38975-0.55136 0.76049-1.0932 1.1502-1.6541 0.10457 0.066543 0.19959 0.12358 0.28519 0.18062 0.9031 0.63692 1.8157 1.2643 2.7188 1.9012 0.6084 0.42778 0.7224 0.91259 0.3517 1.5685-0.5609 0.98865-1.1217 1.9773-1.7016 3.004-0.5989-0.34222-1.1788-0.67494-1.7777-1.0076 0.23765-0.42778 0.46577-0.82704 0.69397-1.2453-1.8252 0.09507-4.1828 2.7663-4.5345 5.1238-0.4658 3.099 1.1788 6.141 3.8405 7.1487 2.6618-5.5041 6.9205-8.3845 13.128-7.8331 4.8577 0.42778 9.183 4.0591 10.457 8.7552 1.5685 5.7512-0.2471 10.39-4.9052 14.022h8.5746c-0.2852-0.3327-0.5418-0.6369-0.8175-0.9506 0.5228-0.4373 1.0172-0.8555 1.578-1.3308 0.0571 0.0855 0.0951 0.1711 0.1521 0.2376 0.6654 0.789 1.3499 1.5685 2.0153 2.3575 0.4563 0.5419 0.4563 1.0267-0.019 1.5591-0.7415 0.8175-1.4925 1.6255-2.2434 2.4336-0.0191 0.0285-0.0571 0.038-0.1141 0.076-0.4848-0.4468-0.9697-0.8936-1.4735-1.3499 0.2662-0.2852 0.5038-0.5608 0.789-0.8746h-28.557v-2.1198h6.1315c-0.8556-0.751-1.6731-1.4735-2.5382-2.2435 0.5704-0.4848 1.0742-0.9031 1.5971-1.3499 2.2815 2.5097 5.1048 3.774 8.508 3.6124 2.4716-0.1236 4.6391-1.0552 6.4547-2.7378 3.6599-3.3842 4.4394-8.7932 1.8918-13.052-2.5002-4.1828-7.6145-6.0935-12.196-4.5535-4.7911 1.6161-7.4528 6.2266-7.1106 10.571 0.3042-0.3327 0.5894-0.6559 0.8936-0.9982 0.5323 0.5704 0.9791 1.0552 1.4639 1.5781-0.7605 0.7795-1.5875 1.635-2.4336 2.4621-0.3232 0.3232-0.8175 0.3042-1.2548-0.0095-0.96963-0.6845-1.9203-1.3879-2.9279-2.1199 0.39926-0.5514 0.78901-1.0932 1.1978-1.6541 0.3137 0.2282 0.6179 0.4373 0.95062 0.675 0.01901-0.1046 0.02852-0.1712 0.03802-0.2472 0.06655-0.8651 0.13309-1.7301 0.20914-2.5857 0.01901-0.1996-0.00951-0.3137-0.21864-0.4088-2.985-1.3879-4.6961-3.7074-5.1429-6.968-0.00951-0.057-0.03802-0.1046-0.05704-0.1616v-1.5876z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="lead-text mb-1 mt-3">Scrum</span>
                                                                            <span class="sub-text">Prioritize and solve
                                                                                your tasks in short time cycles.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-kanban"
                                                                        value="cp1-template-kanban" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-kanban">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-danger">
                                                                                <svg viewBox="0 0 44 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m43.554 9.7467h-11.869v26.253h-2.5153v-26.231h-14.418v26.231h-2.5153v-26.253h-11.779v-2.5265h11.745v-7.2202h2.5265v7.1753h14.396v-7.1753h2.5265v7.209h11.892c0.0112 0.8534 0.0112 1.6956 0.0112 2.5377z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m43.554 18.337c-0.1347 0.393-0.2246 0.8197-0.4155 1.179-0.6625 1.2913-1.7404 2.0324-3.1778 2.0773-1.864 0.0562-3.728 0.0225-5.6032 0.0225-0.0337 0-0.0786-0.0225-0.1347-0.0337v-9.3088h9.3312v6.0637zm-6.8047 0.7523c1.0892 0 2.1335 0.0337 3.189-0.0112 0.6064-0.0225 1.0667-0.5727 1.1004-1.1903 0.0113-0.2807 0-0.5615 0-0.8422v-2.2121h-4.2894v4.2558z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m43.554 4.6936h-9.32v-2.5265h9.32v2.5265z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m17.301 21.627v-9.3312h9.2863c0.0113 0.0786 0.0337 0.1572 0.0337 0.2358 0 1.5159 0.0225 3.0318 0 4.5477-0.0449 2.5041-2.0437 4.5028-4.5477 4.5365-1.5721 0.0224-3.1553 0.0112-4.7723 0.0112zm2.5265-2.5265c0.7636 0 1.4822 0.0112 2.1896 0 1.0106-0.0224 1.8865-0.685 2.01-1.6843 0.1123-0.8534 0.0225-1.7181 0.0225-2.5827h-4.2333c0.0112 1.4261 0.0112 2.8185 0.0112 4.267z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m26.621 24.187c0 1.6731 0.0449 3.3238-0.0112 4.9632-0.0786 2.2683-1.9314 4.1884-4.2221 4.3232-1.6731 0.0898-3.3687 0.0224-5.0755 0.0224v-9.2975c3.0992-0.0113 6.1984-0.0113 9.3088-0.0113zm-6.7935 6.7823h0.3481c0.6288 0 1.2576 0.0112 1.8865 0 0.9544-0.0224 1.8191-0.6625 1.9426-1.6057 0.1123-0.8759 0.0224-1.7742 0.0224-2.6613h-4.2108c0.0112 1.4373 0.0112 2.8297 0.0112 4.267z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m0.44629 21.627v-9.32h9.2077c0.01123 0.0112 0.03369 0.0337 0.03369 0.0562-0.01123 1.7517 0.10106 3.5146-0.06738 5.2551-0.22457 2.1896-1.8752 3.6943-4.0536 3.975-0.22458 0.0337-0.44916 0.0225-0.67374 0.0225-1.471 0.0112-2.942 0.0112-4.4467 0.0112zm2.5377-6.8047v4.267c0.78603 0 1.5608 0.0561 2.3244-0.0112 0.88709-0.0786 1.5833-0.5952 1.7405-1.471 0.16843-0.8983 0.11229-1.8528 0.1572-2.7736-1.4598-0.0112-2.8297-0.0112-4.2221-0.0112z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m9.7551 4.6936h-9.2751v-2.4928h9.2751v2.4928z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m17.312 2.1783h9.2863v2.4928h-9.2863v-2.4928z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span
                                                                                class="lead-text mb-1 mt-3">Kanban</span>
                                                                            <span class="sub-text">Keep a constant
                                                                                workflow on independent tasks.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-duplicate"
                                                                        value="cp1-template-duplicate" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-duplicate">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-primary">
                                                                                <svg viewBox="0 0 44 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m4.0054 20.544v-13.86c0-1.0711 0.47129-1.5424 1.5317-1.5424h27.795c1.0389 0 1.5209 0.48199 1.5209 1.5317v27.795c0 1.039-0.482 1.5317-1.5209 1.5317h-27.795c-1.0604-0.0107-1.5317-0.4927-1.5317-1.5531v-13.903zm28.256-12.8h-25.653v25.653h25.653v-25.653z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m37.424 2.5707h-0.5784-26.146c-0.225 0-0.4606-0.01071-0.6748-0.07497-0.58915-0.18209-0.95333-0.7712-0.87835-1.371 0.07497-0.59983 0.57839-1.0711 1.189-1.114 0.1178-0.010711 0.2356 0 0.3642 0 9.2436-0.010711 18.477-0.010711 27.72-0.010711 1.1139 0 1.5745 0.46058 1.5745 1.5852v27.667c0 0.2357-0.0107 0.482-0.075 0.7069-0.1714 0.5784-0.7498 0.9319-1.3389 0.8676-0.5998-0.0642-1.0925-0.5569-1.1461-1.1568-0.0107-0.1499-0.0107-0.2892-0.0107-0.4391v-26.146-0.51414z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m20.715 21.851v5.1091c0 0.6213-0.3642 1.0926-0.9319 1.264-0.5248 0.1606-1.1139-0.0322-1.4031-0.5142-0.1393-0.2356-0.225-0.5462-0.225-0.8247-0.0214-1.5103-0.0107-3.0206-0.0107-4.5415v-0.4927h-0.4498-5.8162c-0.8569 0-1.4353-0.5249-1.446-1.2747 0-0.7605 0.5784-1.2853 1.4246-1.296h6.2874v-0.4392c0-1.5638-0.0107-3.1276 0-4.7021 0-0.6855 0.4927-1.2211 1.1461-1.2854 0.632-0.0642 1.2211 0.3428 1.3817 0.9747 0.0429 0.1607 0.0429 0.3428 0.0429 0.5142v4.4558 0.4713h0.4606 5.9446c0.6213 0 1.114 0.3963 1.2639 0.9747 0.1393 0.5248-0.0749 1.1139-0.5677 1.3817-0.2463 0.1286-0.5569 0.2035-0.8354 0.2035-1.928 0.0215-3.856 0.0107-5.784 0.0107-0.1393 0.0108-0.2892 0.0108-0.482 0.0108z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span class="lead-text mb-1 mt-3">Duplicate
                                                                                Project</span>
                                                                            <span class="sub-text">Start clean and keep
                                                                                your configuration.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-radio pro-control custom-control-full">
                                                                    <input type="radio" class="custom-control-input"
                                                                        name="cp1-project-template"
                                                                        id="cp1-template-import"
                                                                        value="cp1-template-import" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-template-import">
                                                                        <span
                                                                            class="d-flex flex-column text-center px-sm-3">
                                                                            <span class="icon-wrap text-success">
                                                                                <svg viewBox="0 0 45 36"
                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                    <path
                                                                                        d="m7.721 5.5404c0.03454-0.71378 0.02302-1.393 0.11512-2.0608 0.28782-1.9111 1.9802-3.3962 3.9143-3.4653 0.4951-0.023025 1.0016-0.011513 1.5082-0.011513h20.631c2.0838 0 3.7301 1.2549 4.2021 3.2235 0.0921 0.39143 0.1037 0.79437 0.1267 1.1973 0.023 0.35689 0 0.71378 0 1.1398 0.6101 0 1.1858-0.05757 1.7614 0.01151 2.1759 0.24176 3.7071 1.9341 3.7646 4.133 0.0231 0.94408 0.0116 1.8996 0 2.8436-0.0115 0.8289-0.6332 1.4506-1.416 1.4276-0.7714-0.023-1.3355-0.6332-1.3355-1.4506v-2.6709c0-1.0016-0.5526-1.5427-1.5542-1.5427h-32.892c-1.0016 0-1.5427 0.5411-1.5427 1.5542v21.805c0 1.0361 0.52958 1.5657 1.5772 1.5657h32.857c1.0246 0 1.5657-0.5526 1.5657-1.5887v-13.688c0-1.1283 1.0707-1.8075 2.0263-1.2894 0.4835 0.2648 0.7253 0.6907 0.7253 1.2318 0 4.6511 0.023 9.3022-0.0116 13.942-0.023 2.3831-1.8535 4.1445-4.2481 4.1445-10.995 0.0116-21.989 0.0116-32.984 0-2.4752 0-4.2827-1.8305-4.2827-4.2942v-21.839c0-2.4867 1.8075-4.2942 4.2942-4.3172h1.1973zm27.734-0.01151v-1.0246c0-1.2434-0.4835-1.7269-1.7153-1.7269h-21.483c-0.1382 0-0.2878-0.01151-0.426 0-0.6332 0.04605-1.1512 0.44899-1.2318 1.0707-0.0806 0.5526-0.0231 1.1052-0.0231 1.6808h24.879z"
                                                                                        fill="currentColor" />
                                                                                    <path
                                                                                        d="m24.368 25.71c0.1842-0.1727 0.2878-0.2648 0.3914-0.3569 0.9325-0.9325 1.8766-1.8765 2.8091-2.809 0.5986-0.5872 1.4506-0.6102 2.0032-0.0691 0.5526 0.5526 0.5411 1.416-0.0461 2.0032l-5.4915 5.4915c-0.6447 0.6447-1.4506 0.6332-2.0953-0.0115-1.8075-1.796-3.6034-3.6035-5.3994-5.411-0.6217-0.6331-0.6332-1.4621-0.0461-2.0377 0.5757-0.5526 1.3815-0.5181 2.0032 0.0921 1.0131 1.0016 2.0147 2.0147 3.1199 3.1199v-0.5986c0-4.1446-0.0115-8.2891 0.0116-12.434 0-0.3684 0.1151-0.7713 0.2993-1.0821 0.2993-0.4951 0.898-0.6563 1.4391-0.4951 0.5756 0.1727 0.944 0.6217 0.9901 1.2203 0.0115 0.1727 0.0115 0.3454 0.0115 0.5181v12.261 0.5986z"
                                                                                        fill="currentColor" />
                                                                                </svg>
                                                                            </span>
                                                                            <span class="lead-text mb-1 mt-3">Import
                                                                                Project</span>
                                                                            <span class="sub-text">Prioritize and solve
                                                                                your tasks in short time cycles.</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-4">Team Members</h5>
                                                        <ul class="row g-3">
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-1"
                                                                        value="cp1-team-1" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-1">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/c-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Keith
                                                                                    Jensen</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-2"
                                                                        value="cp1-team-2" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-2">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/b-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Stefan
                                                                                    Zakrisson</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-3"
                                                                        value="cp1-team-3" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-3">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq bg-purple">
                                                                                <span>DM</span>
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Daisy
                                                                                    Morgan</span>
                                                                                <span class="sub-text">UI/UX
                                                                                    Designer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-4"
                                                                        value="cp1-team-4" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-4">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/a-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Stefan
                                                                                    Harary</span>
                                                                                <span class="sub-text">Software
                                                                                    Engineer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-5"
                                                                        value="cp1-team-5" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-5">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq">
                                                                                <img src="./images/avatar/d-sm.jpg"
                                                                                    alt="">
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Michiel
                                                                                    Berende</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                            <li class="col-6">
                                                                <div
                                                                    class="custom-control custom-control-sm custom-control-pro custom-checkbox custom-control-full">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        name="cp1-project-team" id="cp1-team-6"
                                                                        value="cp1-team-6" required>
                                                                    <label class="custom-control-label"
                                                                        for="cp1-team-6">
                                                                        <span class="user-card">
                                                                            <span class="user-avatar sq bg-warning">
                                                                                <span>JR</span>
                                                                            </span>
                                                                            <span class="user-info">
                                                                                <span class="lead-text">Jonathan
                                                                                    Rios</span>
                                                                                <span class="sub-text">Senior
                                                                                    Developer</span>
                                                                            </span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-stepper-step">
                                                        <h5 class="title mb-3">More Info</h5>
                                                        <div class="row g-3">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-client">Client</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" class="form-control"
                                                                            id="cp1-project-client"
                                                                            name="cp1-project-client"
                                                                            placeholder="Client or Company name"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-lead">Lead</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select js-select2"
                                                                            id="cp1-project-lead"
                                                                            name="cp1-project-lead"
                                                                            data-placeholder="Select Lead" required>
                                                                            <option value=""></option>
                                                                            <option value="Keith_Jensen">Keith Jensen
                                                                            </option>
                                                                            <option value="Stefan_Zakrisson">Stefan
                                                                                Zakrisson</option>
                                                                            <option value="Daisy_Morgan">Daisy Morgan
                                                                            </option>
                                                                            <option value="Stefan_Harary">Stefan Harary
                                                                            </option>
                                                                            <option value="Michiel_Berende">Michiel
                                                                                Berende</option>
                                                                            <option value="Jonathan_Rios">Jonathan Rios
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-deadline">Deadline</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text"
                                                                            class="form-control date-picker"
                                                                            id="cp1-project-deadline"
                                                                            name="cp1-project-deadline"
                                                                            placeholder="mm/dd/yyyy" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label class="form-label"
                                                                        for="cp1-project-tags">Tags</label>
                                                                    <div class="form-control-wrap">
                                                                        <input type="text" placeholder="Add Tags"
                                                                            class="form-control js-tagify tagify"
                                                                            id="cp1-project-tags"
                                                                            name="cp1-project-tags" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label class="form-label">Project Action</label>
                                                                    <div class="form-control-wrap">
                                                                        <ul class="custom-control-group gx-4">
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-follow-project"
                                                                                        id="cp1-follow-project"
                                                                                        value="follow_project">
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-follow-project">Follow
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                            <li>
                                                                                <div
                                                                                    class="custom-control custom-control-sm custom-checkbox">
                                                                                    <input type="checkbox"
                                                                                        class="custom-control-input"
                                                                                        name="cp1-save-project"
                                                                                        id="cp1-save-project"
                                                                                        value="save_project">
                                                                                    <label class="custom-control-label"
                                                                                        for="cp1-save-project">Save
                                                                                        Project</label>
                                                                                </div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-stepper-step text-center">
                                                        <h5 class="title mb-2">Successfully created!</h5>
                                                        <p class="text-soft">Successfully created your project to
                                                            kickstart now </p>
                                                        <div class="gfx w-50 mx-auto">

                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-stepper-pagination pt-4 gx-4 gy-2 stepper-pagination">
                                                    <li class="step-prev"><button
                                                            class="btn btn-dim btn-primary">Prev</button></li>
                                                    <li class="step-next"><button
                                                            class="btn btn-primary">Next</button></li>
                                                    <li class="step-submit"><button
                                                            class="btn btn-primary">Submit</button></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </div>



    <!-- app-root @e -->
    <!-- JavaScript -->

    <script>
        function showForm(formNumber) {
            for (let i = 1; i <= 2; i++) {
                const form = document.getElementById('form' + i);
                if (i === formNumber) {
                    form.style.display = 'block';
                } else {
                    form.style.display = 'none';
                }
            }
        }

        // Ensure the buttons are accessible after the DOM is loaded
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll('.show-buttons');
            buttons.forEach((button, index) => {
                button.addEventListener('click', () => showForm(index + 1));
            });
        });

        // let currentSlider = 0;
        // const sliders = document.querySelectorAll('.slider');

        // function changeSlider() {
        //     sliders[currentSlider].classList.remove('active');
        //     currentSlider = (currentSlider + 1) % sliders.length;
        //     sliders[currentSlider].classList.add('active');
        //     setTimeout(changeSlider, 5000); // Change slider every 5 seconds
        // }

        // setTimeout(changeSlider, 5000); // Start slider change on page load
    </script>

    <script src="{{ asset('assets/frontend/js/bundle.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('assets/frontend/js/scripts.js?ver=3.2.2') }}"></script>
    <script src="{{ asset('assets/frontend/js/libs/tagify.js?ver=3.2.2') }}"></script>

</html>
