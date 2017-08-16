@extends('master')
@section('pageTitle','Manage Clients')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-5">
                    <div class="jumbotron">
                        <h1>Steps</h1>
                        <p>Smart UI component which allows you to easily create wizard-like interfaces.</p>
                        <p><a href="http://www.jquery-steps.com/GettingStarted" target="_blank" class="btn btn-primary btn-lg" role="button">Learn more about jQuery Steps</a>
                        </p>
                    </div>
                </div>
                <div class="col-lg-7">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Basic Wizzard</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <p>
                            This is basic example of Step
                        </p>
                        <div id="wizard">
                            <h1>First Step</h1>
                            <div class="step-content">
                                <div class="text-center m-t-md">
                                <h2>Hello in Step 1</h2>
                                <p>
                                    This is the first content.
                                </p>
                                </div>
                            </div>

                            <h1>Second Step</h1>
                            <div class="step-content">
                                <div class="text-center m-t-md">
                                    <h2>This is step 2</h2>
                                    <p>
                                        This content is diferent than the first one.
                                    </p>
                                </div>
                            </div>

                            <h1>Third Step</h1>
                            <div class="step-content">
                                <div class="text-center m-t-md">
                                    <h2>This is step 3</h2>
                                    <p>
                                        This is last content.
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-title">
                            <h5>Wizard with Validation</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <h2>
                                Validation Wizard Form
                            </h2>
                            <p>
                                This example show how to use Steps with jQuery Validation plugin.
                            </p>

                            <form id="form" action="#" class="wizard-big">
                                <h1>Account</h1>
                                <fieldset>
                                    <h2>Account Information</h2>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <div class="form-group">
                                                <label>Username *</label>
                                                <input id="userName" name="userName" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Password *</label>
                                                <input id="password" name="password" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Confirm Password *</label>
                                                <input id="confirm" name="confirm" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="text-center">
                                                <div style="margin-top: 20px">
                                                    <i class="fa fa-sign-in" style="font-size: 180px;color: #e5e5e5 "></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </fieldset>
                                <h1>Profile</h1>
                                <fieldset>
                                    <h2>Profile Information</h2>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>First name *</label>
                                                <input id="name" name="name" type="text" class="form-control required">
                                            </div>
                                            <div class="form-group">
                                                <label>Last name *</label>
                                                <input id="surname" name="surname" type="text" class="form-control required">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email *</label>
                                                <input id="email" name="email" type="text" class="form-control required email">
                                            </div>
                                            <div class="form-group">
                                                <label>Address *</label>
                                                <input id="address" name="address" type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>

                                <h1>Warning</h1>
                                <fieldset>
                                    <div class="text-center" style="margin-top: 120px">
                                        <h2>You did it Man :-)</h2>
                                    </div>
                                </fieldset>

                                <h1>Finish</h1>
                                <fieldset>
                                    <h2>Terms and Conditions</h2>
                                    <input id="acceptTerms" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    </div>

                </div>
            </div>
<!-- CLIENTS MANAGEMENT TABLE -->
<div class="row">
	<div class="col-lg-12">
		<div class="ibox float-e-margins">
			<div class="ibox-title">
				<h5>Clients' Management</h5>
				<div class="ibox-tools">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">
						<i class="fa fa-wrench"></i>
					</a>
					<ul class="dropdown-menu dropdown-user">
						<li><a href="#" class="text-success">Active Subscribers</a></li>
						<li><a href="#" class="text-danger">Inactive Subscribers</a></li>
					</ul>
				</div>
			</div>
			<div class="ibox-content">
				<input type="text" class="form-control input-sm m-b-xs" id="filter" placeholder="Search in table">
				<table class="footable table table-stripped footable-loaded tablet breakpoint" data-page-size="8" data-filter="#filter">
					<thead>
						<tr>
							<th class="footable-visible footable-sortable footable-first-column">Rendering engine<span class="footable-sort-indicator"></span></th>
							<th class="footable-visible footable-sortable footable-last-column">Browser<span class="footable-sort-indicator"></span></th>
							<th data-hide="phone,tablet" class="footable-sortable" style="display: none;">Platform(s)<span class="footable-sort-indicator"></span></th>
							<th data-hide="phone,tablet" class="footable-sortable" style="display: none;">Engine version<span class="footable-sort-indicator"></span></th>
							<th data-hide="phone,tablet" class="footable-sortable" style="display: none;">CSS grade<span class="footable-sort-indicator"></span></th>
						</tr>
					</thead>
					<tbody>
						<tr class="gradeX footable-even" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Trident</td>
							<td class="footable-visible footable-last-column">Internet
								Explorer 4.0
							</td>
							<td class="" style="display: none;">Win 95+</td>
							<td class="center" style="display: none;">4</td>
							<td class="center" style="display: none;">X</td>
						</tr>
						<tr class="gradeC footable-odd" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Trident</td>
							<td class="footable-visible footable-last-column">Internet
								Explorer 5.0
							</td>
							<td class="" style="display: none;">Win 95+</td>
							<td class="center" style="display: none;">5</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeA footable-even" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Trident</td>
							<td class="footable-visible footable-last-column">Internet
								Explorer 5.5
							</td>
							<td class="" style="display: none;">Win 95+</td>
							<td class="center" style="display: none;">5.5</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Gecko</td>
							<td class="footable-visible footable-last-column">Netscape Navigator 9</td>
							<td class="" style="display: none;">Win 98+ / OSX.2+</td>
							<td class="center" style="display: none;">1.8</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
							<td class="footable-visible footable-last-column">Safari 1.3</td>
							<td class="" style="display: none;">OSX.3</td>
							<td class="center" style="display: none;">312.8</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
							<td class="footable-visible footable-last-column">Safari 2.0</td>
							<td class="" style="display: none;">OSX.4+</td>
							<td class="center" style="display: none;">419.3</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
							<td class="footable-visible footable-last-column">Safari 3.0</td>
							<td class="" style="display: none;">OSX.4+</td>
							<td class="center" style="display: none;">522.1</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
							<td class="footable-visible footable-last-column">OmniWeb 5.5</td>
							<td class="" style="display: none;">OSX.4+</td>
							<td class="center" style="display: none;">420</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
							<td class="footable-visible footable-last-column">iPod Touch / iPhone</td>
							<td class="" style="display: none;">iPod</td>
							<td class="center" style="display: none;">420.1</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Webkit</td>
							<td class="footable-visible footable-last-column">S60</td>
							<td class="" style="display: none;">S60</td>
							<td class="center" style="display: none;">413</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 7.0</td>
							<td class="" style="display: none;">Win 95+ / OSX.1+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 7.5</td>
							<td class="" style="display: none;">Win 95+ / OSX.2+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 8.0</td>
							<td class="" style="display: none;">Win 95+ / OSX.2+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 8.5</td>
							<td class="" style="display: none;">Win 95+ / OSX.2+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 9.0</td>
							<td class="" style="display: none;">Win 95+ / OSX.3+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 9.2</td>
							<td class="" style="display: none;">Win 88+ / OSX.3+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera 9.5</td>
							<td class="" style="display: none;">Win 88+ / OSX.3+</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Opera for Wii</td>
							<td class="" style="display: none;">Wii</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Nokia N800</td>
							<td class="" style="display: none;">N800</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Presto</td>
							<td class="footable-visible footable-last-column">Nintendo DS browser</td>
							<td class="" style="display: none;">Nintendo DS</td>
							<td class="center" style="display: none;">8.5</td>
							<td class="center" style="display: none;">C/A<sup>1</sup></td>
						</tr>
						<tr class="gradeC footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>KHTML</td>
							<td class="footable-visible footable-last-column">Konqureror 3.1</td>
							<td class="" style="display: none;">KDE 3.1</td>
							<td class="center" style="display: none;">3.1</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>KHTML</td>
							<td class="footable-visible footable-last-column">Konqureror 3.3</td>
							<td class="" style="display: none;">KDE 3.3</td>
							<td class="center" style="display: none;">3.3</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>KHTML</td>
							<td class="footable-visible footable-last-column">Konqureror 3.5</td>
							<td class="" style="display: none;">KDE 3.5</td>
							<td class="center" style="display: none;">3.5</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeX footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Tasman</td>
							<td class="footable-visible footable-last-column">Internet Explorer 4.5</td>
							<td class="" style="display: none;">Mac OS 8-9</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">X</td>
						</tr>
						<tr class="gradeC footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Tasman</td>
							<td class="footable-visible footable-last-column">Internet Explorer 5.1</td>
							<td class="" style="display: none;">Mac OS 7.6-9</td>
							<td class="center" style="display: none;">1</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeC footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Tasman</td>
							<td class="footable-visible footable-last-column">Internet Explorer 5.2</td>
							<td class="" style="display: none;">Mac OS 8-X</td>
							<td class="center" style="display: none;">1</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeA footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">NetFront 3.1</td>
							<td class="" style="display: none;">Embedded devices</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeA footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">NetFront 3.4</td>
							<td class="" style="display: none;">Embedded devices</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">A</td>
						</tr>
						<tr class="gradeX footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">Dillo 0.8</td>
							<td class="" style="display: none;">Embedded devices</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">X</td>
						</tr>
						<tr class="gradeX footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">Links</td>
							<td class="" style="display: none;">Text only</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">X</td>
						</tr>
						<tr class="gradeX footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">Lynx</td>
							<td class="" style="display: none;">Text only</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">X</td>
						</tr>
						<tr class="gradeC footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">IE Mobile</td>
							<td class="" style="display: none;">Windows Mobile 6</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeC footable-even" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Misc</td>
							<td class="footable-visible footable-last-column">PSP browser</td>
							<td class="" style="display: none;">PSP</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">C</td>
						</tr>
						<tr class="gradeU footable-odd" style="display: none;">
							<td class="footable-visible footable-first-column"><span class="footable-toggle"></span>Other browsers</td>
							<td class="footable-visible footable-last-column">All others</td>
							<td class="" style="display: none;">-</td>
							<td class="center" style="display: none;">-</td>
							<td class="center" style="display: none;">U</td>
						</tr>
					</tbody>
					<tfoot>
					<tr>
						<td colspan="5" class="footable-visible">
							<ul class="pagination pull-right"><li class="footable-page-arrow disabled"><a data-page="first" href="#first">«</a></li><li class="footable-page-arrow disabled"><a data-page="prev" href="#prev">‹</a></li><li class="footable-page active"><a data-page="0" href="#">1</a></li><li class="footable-page"><a data-page="1" href="#">2</a></li><li class="footable-page"><a data-page="2" href="#">3</a></li><li class="footable-page"><a data-page="3" href="#">4</a></li><li class="footable-page"><a data-page="4" href="#">5</a></li><li class="footable-page-arrow"><a data-page="next" href="#next">›</a></li><li class="footable-page-arrow"><a data-page="last" href="#last">»</a></li></ul>
						</td>
					</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
	<script src="{{ secure_asset('js/plugins/steps/jquery.steps.min.js') }}"></script>
	<script src="{{ secure_asset('js/plugins/validate/jquery.validate.min.js') }}"></script>
	<script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>
@endsection