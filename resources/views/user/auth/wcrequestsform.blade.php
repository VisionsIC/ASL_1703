    <div class="form-container">
        <div class="row" id="form-row">
            <div id="wc-col-12" class="col-md-12">
                <div class="panel panel-default">
                    <header class="panel-heading" id="wc-panel-head">
                        <h5 id="wc-req-head-title">RERA Wheelchair Request Form Wizard</h5>
                    </header>
                    <article class="form-horizontal">
                        <div class="container">
                            <div class="row" id="wizard-row">
                                <div class="wizard">
                                    <figure class="wizard-inner">
                                        <hr class="connecting-line">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <!-- Step 1 List Heading -->
                                            <li role="presentation" class="active">
                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                                    <span class="round-tab">
                                                        <i class="step-numbers">STEP 1</i>
                                                    </span>
                                                </a>
                                            </li>
                                            <!-- Step 2 List Heading -->
                                            <li role="presentation" class="disabled">
                                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                                    <span class="round-tab">
                                                        <i class="step-numbers">STEP 2</i>
                                                    </span>
                                                </a>
                                            </li>
                                            <!-- Step 3 List Heading -->
                                            <li role="presentation" class="disabled">
                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                                    <span class="round-tab">
                                                        <i class="step-numbers">STEP 3</i>
                                                    </span>
                                                </a>
                                            </li>
                                            <!-- Step 4 List Heading -->
                                            <li role="presentation" class="disabled">
                                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                                    <span class="round-tab">
                                                        <i class="step-numbers">STEP 4</i>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </figure>
                                    <!-- Start of Step 1 Form -->
                                    <form role="form" method="POST" action="{{ url('/user/wc_requests') }}">
                                        {{ csrf_field() }}
                                        <article class="tab-content">
                                            <!-- Start of Step 1 Select Form Panel -->
                                            <fieldset class="tab-pane active" role="tabpanel" id="step1">
                                                <!-- Patient Location Title -->
                                                <h5 id="patient-info-title">Patient Information</h5>
                                                <!-- Unit Select Form Group # 1 -->
                                                <p id="fg-fw-1" class="form-group">
                                                    <label for="unit" class="col-md-4 control-label">Unit</label>
                                                    <select title="unit" id="unit_id" class="units form-control select-picker show-tick" name="unit" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Unit</option>
                                                        <!-- Unit Select Form Group # 1 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Patient Name Select Form Group # 2 (JQuery Control) -->
                                                <p id="fg-fw-2" class="form-group">
                                                    <label for="patient_name" class="col-md-4 control-label">Patient Name</label>
                                                    <select title="patient_name" id="patient_name" class="patient_name form-control select-picker show-tick" name="patient_name" data-style="btn-info" autofocus>
                                                        <option value="0" selected>Select Patient</option>
                                                    </select>
                                                </p>
                                                <!-- Room Select Form Group # 3 (JQuery Control) -->
                                                <p id="fg-fw-3" class="form-group">
                                                    <label for="room" class="col-md-4 control-label">Room</label>
                                                    <select title="room" id="room" class="room form-control select-picker show-tick" name="room" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Room</option>
                                                    </select>
                                                </p>
                                                <!-- Gender Select Form Group # 4 (JQuery Control) -->
                                                <P id="fg-fw-4" class="form-group">
                                                    <label for="gender" class="col-md-4 control-label">Gender</label>
                                                    <select title="gender" id="gender" class="gender form-control select-picker show-tick" name="gender" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Gender</option>
                                                    </select>
                                                </P>
                                                <!-- Step 2 Button Form Group (page 1) -->
                                                <section id="fg-step-2" class="form-group">
                                                    <ul class="list-inline pull-right" id="button-group-one">
                                                        <li><button type="button" class="btn btn-primary next-step" id="step-two">Step 2</button></li>
                                                    </ul>
                                                </section>
                                            </fieldset>
                                            <!-- Step 2 Tab Panel -->
                                            <fieldset class="tab-pane" role="tabpanel" id="step2">
                                                <!-- Care Info Title -->
                                                <h5 id="patient-info-title">Patient Information</h5>
                                                <!-- Diagnosis Select Form Group # 5 (JQuery Control) -->
                                                <p id="fg-fw-5" class="form-group">
                                                    <label for="diagnosis" class="col-md-4 control-label">Diagnosis</label>
                                                    <select title="diagnosis" id="diagnosis" class="diagnosis_abbreviation form-control select-picker show-tick" name="diagnosis" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Diagnosis</option>
                                                    </select>
                                                </p>
                                                <!-- Therapist Title Select Form Group # 6 -->
                                                <p id="fg-fw-6" class="form-group">
                                                    <label for="therapist_title" class="col-md-4 control-label">Therapist Title</label>
                                                    <select title="therapist_title" id="therapist_title" class="therapist_title form-control select-picker show-tick" name="therapist_title" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Therapist Title</option>
                                                        <!-- Therapist Title Select Form Group # 6 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Therapist Name Select Form Group # 7 (JQuery Control) -->
                                                <p id="fg-fw-7" class="form-group">
                                                    <label for="therapist_name" class="col-md-4 control-label">Therapist Name</label>
                                                    <select title="therapist_name" id="therapist_name" class="therapist_names form-control select-picker show-tick" name="therapist_name" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Therapist</option>
                                                    </select>
                                                </p>
                                                <!-- Wheelchair Type Select Form Group # 8 -->
                                                <p id="fg-fw-8" class="form-group">
                                                    <label for="wc_type" class="col-md-4 control-label">Wheelchair Type</label>
                                                    <select title="wc_type" id="wc_type" class="wc_types form-control select-picker show-tick" name="wc_type" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Wheelchair Type</option>
                                                        <!-- Wheelchair Type Select Form Group # 8 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Step 3 Button Form Group (page 2) -->
                                                <section id="fg-step-3" class="form-group">
                                                    <ul class="list-inline pull-right" id="button-group-two">
                                                        <li><button type="button" class="btn btn-default prev-step" id="back-two">Back</button></li>
                                                        <li><button type="button" class="btn btn-primary next-step" id="step-three">Step 3</button></li>
                                                    </ul>
                                                </section>
                                            </fieldset>
                                            <!-- Step 3 Tab Panel -->
                                            <fieldset class="tab-pane" role="tabpanel" id="step3">
                                                <!-- Wheelchair Info Title -->
                                                <h5 id="wc-info-title">Wheelchair Information</h5>
                                                <!-- Impatient Wheelchair Model Select Form Group # 9 (JQuery Control) -->
                                                <p id="fg-fw-9" class="form-group">
                                                    <label for="wc_model" class="col-md-4 control-label">Wheelchair Model</label>
                                                    <select title="wc_model" id="wc_model" class="inpatient_wc_model form-control select-picker show-tick" name="wc_model" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Wheelchair Model</option>
                                                    </select>
                                                </p>
                                                <!-- Inpatient Wheelchair Brand Select Form Group # 10 (JQuery Control) -->
                                                <p id="fg-fw-10" class="form-group">
                                                    <label for="wc_brand" class="col-md-4 control-label">Wheelchair Brand</label>
                                                    <select title="wc_brand" id="wc_brand" class="inpatient_wc_brand form-control select-picker show-tick" name="wc_brand" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Wheelchair Brand</option>
                                                    </select>
                                                </p>
                                                <!-- Wheelchair Dimensions Select Form Group # 11 -->
                                                <p id="fg-fw-11" class="form-group">
                                                    <label for="wc_dimensions" class="col-md-4 control-label">Wheelchair Dimensions</label>
                                                    <select title="wc_dimensions" id="wc_dimensions" class="wc_dimensions form-control select-picker show-tick" name="wc_dimensions" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Wheelchair Dimensions</option>
                                                        <!-- Wheelchair Dimensions Select Form Group # 11 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Wheelchair Height Select Form Group # 12 -->
                                                <p id="fg-fw-12" class="form-group">
                                                    <label for="wc_height" class="col-md-4 control-label">Wheelchair Height</label>
                                                    <select title="wc_height" id="wc_height" class="wc_heights form-control select-picker show-tick" name="wc_height" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Wheelchair Height</option>
                                                        <!-- Wheelchair Height Select Form Group # 12 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Step 4 Button Form Group (page 3) -->
                                                <section id="fg-step-4" class="form-group">
                                                    <ul class="list-inline pull-right" id="button-group-three">
                                                        <li><button type="button" class="btn btn-default prev-step" id="back-two">Back</button></li>
                                                        <li><button type="button" class="btn btn-primary btn-info-full next-step" id="step-four">Step 4</button></li>
                                                    </ul>
                                                </section>
                                            </fieldset>
                                            <!-- Step 4 Tab Panel -->
                                            <fieldset class="tab-pane" role="tabpanel" id="step4">
                                                <!-- Wheelchair Info Title -->
                                                <h5 id="wc-info-title">Wheelchair Information</h5>
                                                <!-- Wheelchair Back Select Form Group # 13 -->
                                                <p id="fg-fw-13" class="form-group">
                                                    <label for="wc_back" class="col-md-4 control-label">Wheelchair Back</label>
                                                    <select title="wc_back" id="wc_back" class="wc_back_type form-control select-picker show-tick" name="wc_back" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Wheelchair Back</option>
                                                        <!-- Wheelchair Back Select Form Group # 13 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Cushion Type Select Form Group # 14 -->
                                                <p id="fg-fw-14" class="form-group">
                                                    <label for="cushion_type" class="col-md-4 control-label">Cushion Type</label>
                                                    <select title="cushion_type" id="cushion_type" class="cushion_type form-control select-picker show-tick" name="cushion_type" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Cushion Type</option>
                                                        <!-- Cushion Type Select Form Group # 14 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Cushion Dimensions Select Form Group # 15 -->
                                                <p id="fg-fw-15" class="form-group">
                                                    <label for="cushion_dimensions" class="col-md-4 control-label">Cushion Dimensions</label>
                                                    <select title="cushion_dimensions" id="cushion_dimensions" class="cushion_dimensions form-control select-picker show-tick" name="cushion_dimensions" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Cushion Type</option>
                                                        <!-- Cushion Dimensions Select Form Group # 15 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Armrest Type Select Form Group # 16 -->
                                                <p id="fg-fw-16" class="form-group">
                                                    <label for="armrest_type" class="col-md-4 control-label">Armrest Type</label>
                                                    <select title="armrest_type" id="armrest_type" class="armrest_type form-control select-picker show-tick" name="armrest_type" data-style="btn-info" autofocus>
                                                        <option value="0" disabled selected>Select Armrest Type</option>
                                                        <!-- Armrest Type Select Form Group # 16 (For Loop Code Goes Here) -->
                                                    </select>
                                                </p>
                                                <!-- Submit Button Form Group (page 4) -->
                                                <section id="fg-submit" class="form-group">
                                                    <ul class="list-inline pull-right" id="button-group-four">
                                                        <li><button type="button" class="btn btn-default prev-step" id="back-three">Back</button></li>
                                                        <li><button type="submit" class="btn btn-primary" id="submit-req">Submit Request</button></li>
                                                    </ul>
                                                </section>
                                            </fieldset>
                                            <div class="clearfix"></div>
                                        </article>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <p class="help-desk" id="app-help" align="center">Having trouble using this App? Dial 484.596.HELP (4357)</p>
                    </article>
                </div>
            </div>
        </div>
    </div>