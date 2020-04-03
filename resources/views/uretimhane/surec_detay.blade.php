@extends('layouts.master')
@section('icerik')
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash">/</span>
            </li>
            <li><span class="bread-blod">Süreç Detay</span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
        </ul>
        <ul class="breadcome-menu">
            <li><a href="#"></a> <span class="bread-slash"></span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
            <li><span class="bread-blod"></span>
            </li>
        </ul>
    </div>
    <div class="x-editable-area mg-tb-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="x-editable-list">
                        <div class="alert-title">
                            <h2>Proje Adı</h2>

                        </div>
                        <table id="user" class="table table-bordered table-striped x-editor-custom">
                            <tbody>
                            <tr>
                                <td style="width=35%">Simple text field</td>
                                <td style="width=65%"><a href="#" id="username" data-type="text" data-pk="1" data-title="Enter username">superuser</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Empty text field, required</td>
                                <td>
                                    <a href="#" id="firstname" data-type="text" data-pk="1" data-placement="right" data-placeholder="Required" data-title="Enter your firstname"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select, local array, custom display</td>
                                <td>
                                    <a href="#" id="sex" data-type="select" data-pk="1" data-value="" data-title="Select sex"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select, remote array, no buttons</td>
                                <td><a href="#" id="group" data-type="select" data-pk="1" data-value="5" data-source="/groups" data-title="Select group">Admin</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select, error while loading</td>
                                <td><a href="#" id="status" data-type="select" data-pk="1" data-value="0" data-source="/status" data-title="Select status">Active</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Datepicker</td>
                                <td>
                                    <a href="#" id="vacation" data-type="date" data-viewformat="dd.mm.yyyy" data-pk="1" data-placement="right" data-title="When you want vacation to start?">25.02.2013</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Combodate (date)</td>
                                <td>
                                    <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1" data-title="Select Date of birth"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Combodate (datetime)</td>
                                <td>
                                    <a href="#" id="event" data-type="combodate" data-template="D MMM YYYY  HH:mm" data-format="YYYY-MM-DD HH:mm" data-viewformat="MMM D, YYYY, HH:mm" data-pk="1" data-title="Setup event date and time"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Bootstrap Datetimepicker</td>
                                <td><a href="#" id="meeting_start" data-type="datetime" data-pk="1" data-url="/post" data-placement="right" title="Set date & time">15/03/2013 12:45</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Textarea, buttons below. Submit by <i>ctrl+enter</i>
                                </td>
                                <td><a href="#" id="comments" data-type="textarea" data-pk="1" data-placeholder="Your comments here..." data-title="Enter comments">awesome user!</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Checklist</td>
                                <td>
                                    <a href="#" id="fruits" data-type="checklist" data-value="2,3" data-title="Select fruits"></a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select2 (tags mode)</td>
                                <td><a href="#" id="tags" data-type="select2" data-pk="1" data-title="Enter tags">html, javascript</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Select2 (dropdown mode)</td>
                                <td>
                                    <a href="#" id="country" data-type="select2" data-pk="1" data-value="BS" data-title="Select country"></a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{route('surec')}}" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Geri Dön</a>
                </div>
            </div>
        </div>
    </div>
@endsection
