<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครฝึกงาน TRAKOOL SOFTWARE COMPANY ONLINE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <nav class="navbar shadow" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <a class="navbar-item" href="https://bulma.io">
                <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
            </a>

            <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item">
                    Home
                </a>


            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <a href="{{ url('manage/customer') }}" class="button is-primary">
                            <strong>ผู้ดูเเลระบบ</strong>
                        </a>
                        <a class="button is-light">
                            Log in
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1 class="text-primary mt-5">
            สมัครฝึกงาน TRAKOOL SOFTWARE COMPANY ONLINE
        </h1>
    </div>
    <div class="container mt-5 mb-5">


    </div>
    <form action="{{route('register.save')}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="container shadow mb-5 p-3 ">

            <div class="d-flex justify-content-end">
                <div class="mb-3">
                    <label class="form-label "></label>
                    <div class="mb-3 shadow">
                        <img id="preview" width="150" height="150">
                    </div>
                </div>
            </div>


            <div id="file-js-example" class="file has-name is-primary justify-content-end">

                <label class="file-label">
                    <input class="file-input" type="file" id="image" name="profile" accept="image/png,image/jpeg">
                    <span class="file-cta">
                        <span class="file-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-image" viewBox="0 0 16 16">
                                <path d="M8.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM3 2a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v8l-2.083-2.083a.5.5 0 0 0-.76.063L8 11 5.835 9.7a.5.5 0 0 0-.611.076L3 12V2z" />
                            </svg>
                        </span>
                        <span class="file-label">
                            รูปภาพประจำตัว
                        </span>
                    </span>
                    <span class="file-name">
                        กรุณาเลือกไฟล์
                    </span>
                </label>

            </div>
            <div class="file justify-content-end">
                @error('profile')
                <div class="my-2">
                    <span class="text-danger">{{$message}}</span>
                </div>
                @enderror
            </div>


            <h5>ข้อมูลส่วนตัว</h5>
            <hr>

            <div class="row">
                <div class="col-sm-6  col-md-2 col-lg-2">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">คำนำหน้า</label>
                        <select class="form-select" aria-label="Default select example" name="name_title" id="type">
                            <option disabled selected>กรุณาเลือก</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="คุณ">คุณ</option>
                        </select>
                        @error('name_title')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-6 col-md-10 col-lg-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ชื่อ-นามสกุล</label>
                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="">
                        @error('name')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-5">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">หมายเลขบัตรประชาชน</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="x-xxxx-xxx-xx-xxx" name="id_card_number">
                        @error('id_card_number')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-2 col-xl-2">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">วัน/เดือน/ปีเกิด</label>
                        <input id="datepicker3" width="150" name="birthday">
                        @error('birthday')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">เบอร์</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="080-xxx-xxxx" name="phone">
                        @error('phone')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Line</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="LINE ID" name="line_id">
                        @error('line_id')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">

                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">อีเมล์</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="email_address">
                        @error('email_address')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">ที่อยู่</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="4"></textarea>
                        @error('address')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>

                </div>


                <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">ใบอนุญาตขับขี่</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="รถจักรยานยนต์" name="license" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                รถจักรยานยนต์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="รถยนต์" name="license" id="flexRadioDefault2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                รถยนต์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="มีทั้งรถจักรยานยนต์เเละรถยนต์" name="license" id="flexRadioDefault3">
                            <label class="form-check-label" for="flexRadioDefault3">
                                มีทั้งรถจักรยานยนต์เเละรถยนต์
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="ไม่มีใบขับขี่" name="license" id="flexRadioDefault4">
                            <label class="form-check-label" for="flexRadioDefault4">
                                ไม่มีใบขับขี่
                            </label>
                        </div>

                        @error('license')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>




                </div>


            </div>



            <h5>ข้อมูลสถานศึกษา</h5>
            <hr>

            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">สาขา</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="major">
                        @error('major')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">คณะ</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="faculty">
                        @error('faculty')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">มหาลัยวิทยาลัย</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="university" placeholder="university">
                        @error('university')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>








            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">วันที่เริ่มฝึก</label>
                        <input id="datepicker1" width="200" name="start_intern" />
                        @error('start_intern')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">วันที่สิ้นสุดการฝึก</label>
                        <input id="datepicker2" width="200" name="end_intern" />
                        @error('end_intern')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Resume</label>
                        <input class="form-control" type="file" id="formFile" name="resume">
                        @error('resume')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 col-xl-3">
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Transcript (.pdf)</label>
                        <input class="form-control" type="file" id="formFile" name="transcript">
                        @error('transcript')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>




            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Website Blog Social Network อื่นๆ</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="social"></textarea>
                        @error('social')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>

                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">

                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">สิ่งที่สนใจ</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="favorite"></textarea>
                        @error('favorite')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">แนะนำตัวให้เรารู้จักคุณ Introduce yourself</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" name="introduce_yourself"></textarea>
                        @error('introduce_yourself')
                        <div class="my-2">
                            <span class="text-danger">{{$message}}</span>
                        </div>
                        @enderror
                    </div>

                </div>
            </div>



            <button class="button is-medium is-fullwidth is-primary mt-3 mb-2" type="submit">สมัครฝึกงาน</button>
        </div>
    </form>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>


<script>
    $('#datepicker1').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker2').datepicker({
        uiLibrary: 'bootstrap4'
    });

    $('#datepicker3').datepicker({
        uiLibrary: 'bootstrap4'
    });


    function triggerFile() {
        $("#image").trigger("click");
        return false;
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $("#preview").attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#image").change(function() {
        readURL(this);
    });
</script>


</html>