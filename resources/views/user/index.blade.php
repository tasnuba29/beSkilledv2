@extends('user.includes.app')

@section('content')
<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>Profile Information</h5>

        </div>
        <div class="card-body">
            @if($message = Session::get('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{ $message }}</strong>
            </div>
            @endif

        @foreach ($errors->all() as $error)

                            <p class="text-danger">{{ $error }}</p>

                         @endforeach 


            <div class="card card-preview">
                <div class="card-inner">
                    <form action="{{ route('users.account.update') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Name </label>
                            <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                            @if($errors->has('name'))
                            <span class="text-danger ">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Email </label>
                            <input type="email" name="email" placeholder="Enter Trainer Email" class="form-control" value="{{ $user->email }}" required>
                            @if($errors->has('email'))
                            <span class="text-danger ">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Phone Number </label>
                            <input type="text" name="number" class="form-control" value="{{ $user->perticipator->number}}">
                            @if($errors->has('number'))
                            <span class="text-danger ">{{ $errors->first('number') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label">Occupation </label>
                            <input type="text" name="occopation" class="form-control" value="{{ $user->perticipator->occopation}}">
                            @if($errors->has('occopation'))
                            <span class="text-danger ">{{ $errors->first('occopation') }}</span>
                            @endif
                        </div>


                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> City </label>
                            <input type="text" name="city" class="form-control" value="{{ $user->perticipator->city}}">
                            @if($errors->has('city'))
                            <span class="text-danger ">{{ $errors->first('city') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-6 float-left">
                            <label class="form-label">Country </label>

                            @php


                            $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");


                            @endphp
                            <select class="form-select form-select-sm" name="country" value="{{$user->perticipator->country}}" data-search="off">
                                @foreach($countries as $country)
                                @if($country == $user->perticipator->country )
                                <option value="{{$country}}" selected="selected">{{$country}}</option>
                                @else
                                <option value="{{$country}}">{{$country}}</option>
                                @endif

                                @endforeach
                            </select>


                            @if($errors->has('country'))
                            <span class="text-danger ">{{ $errors->first('country') }}</span>
                            @endif
                        </div>


                        <div class="form-group col-md-12 float-left">
                            <label class="form-label">Image </label>
                            <img src="{{ asset('images/'.$user->profile_photo_path) }}" style="height: 120px; width: 120px"><br />
                            <div class="mt-1">
                                <input type="file" name="image" class="form-control">
                            </div>
                        </div>


                        <div class="form-group col-md-12 float-left">
                            <input type="submit" name="btn" class="btn btn-primary col-6 btn-block" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 


<div class="nk-content-body">
    <div class="card">
        <div class="card-header">
            <h5>Password</h5>

        </div>
        <div class="card-body">

            <div class="card card-preview">
                <div class="card-inner">
                    <form action="{{ route('users.account.password') }}" method="post">
                        @csrf

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Current Password </label>
                            <input type="text" name="current_password" class="form-control">
                            @if($errors->has('current_password'))
                            <span class="text-danger ">{{ $errors->first('current_password') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> New Password </label>
                            <input type="text" name="new_password" class="form-control">
                            @if($errors->has('new_password'))
                            <span class="text-danger ">{{ $errors->first('new_password') }}</span>
                            @endif
                        </div>

                        <div class="form-group col-md-6 float-left">
                            <label class="form-label"> Confirm Password </label>
                            <input type="text" name="confirm_password" class="form-control">
                            @if($errors->has('confirm_password'))
                            <span class="text-danger ">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>




                        <div class="form-group col-md-12 float-left">
                            <input type="submit" name="btn" class="btn btn-primary col-6 btn-block" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection