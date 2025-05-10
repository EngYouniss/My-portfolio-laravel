@csrf
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">الاسم الكامل</label>
        <input type="text" class="form-control" name="fullName"
               value="{{ $personalInfo->name }}">
        @error('fullName')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">المسمى الوظيفي</label>
        <input type="text" class="form-control" name="jobTitle"
               value="{{ $personalInfo->job_title }}">
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">البريد الإلكتروني</label>
        <input type="email" class="form-control" name="email"
               value="{{ $personalInfo->email }}">
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">رقم الهاتف</label>
        <input type="tel" class="form-control" name="phoneNumber"
               value="{{ $personalInfo->phone_number  }}">
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">العنوان</label>
        <input type="text" class="form-control" name="address"
               value="{{ $personalInfo->address  }}">
    </div>
                 <div class="col-md-6 mb-3">
    <label class="form-label">المدينة</label>
    @php
        $selectedCity = old('city');
        $yemenGovernorates = [
            "Abyan", "Aden", "Al Bayda", "Al Dhale'e", "Al Hudaydah", "Al Jawf", "Al Mahrah",
            "Al Mahwit", "Amanat Al Asimah", "Amran", "Dhamar", "Hadhramaut", "Hajjah", "Ibb",
            "Lahij", "Marib", "Raymah", "Saada", "Sana'a", "Shabwah", "Socotra", "Taiz",
            "Bani Matar", "Hamdan"
        ];
    @endphp

    <select name="city" class="form-select">
        @foreach($yemenGovernorates as $gov)
            <option value="{{ $gov }}" {{ $selectedCity == $gov ? 'selected' : '' }}>
                {{ $gov }}
            </option>
        @endforeach
    </select>
</div>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">الدولة</label>
        @php
            $selectedCountry = $personalInfo->country;
        @endphp
        <select name="country" class="form-select">
            <option value="Yemen" {{ $selectedCountry == "Yemen" ? 'selected' : '' }}>Yemen</option>
            <option value="Saudi Arabia" {{ $selectedCountry == "Saudi Arabia" ? 'selected' : '' }}>Saudi Arabia</option>
            <option value="UAE" {{ $selectedCountry == "UAE" ? 'selected' : '' }}>UAE</option>
        </select>
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label">العمر</label>
        <input type="number" class="form-control" name="age"
               value="{{ $personalInfo->age }}">
    </div>
</div>

<div class="mb-3">
    <label class="form-label">تاريخ الميلاد</label>
    <input type="date" class="form-control" name="birthDate"
           value="{{ $personalInfo->birthdate }}">

</div>

<div class="mb-3">
    <label class="form-label">نبذة عني</label>
    <textarea class="form-control" rows="5" name="aboutMe">{{$personalInfo->about_me }}</textarea>
</div>

<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label">صورة شخصية</label>
        <input type="file" class="form-control" name="image" accept="image/*">

        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
</div>
<div class="col-md-6 mb-3">
    <label class="form-label">السيرة الذاتية (CV)</label>
    <div class="input-group">
        <input type="file" class="form-control" name="cv" accept=".pdf,.doc,.docx">
    </div>
    @if(isset($personalInfo) && $personalInfo->cv)
        <small>الملف الحالي: <a href="{{  $personalInfo->cv }}" target="_blank">عرض</a></small>
    @endif
</div>
</div>
@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'تم بنجاح!',
            text: '{{ session('success') }}',
            confirmButtonText: 'حسنًا'
        });
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'حدث خطأ!',
            text: '{{ session('error') }}',
            confirmButtonText: 'حسنًا'
        });
    </script>
@endif

