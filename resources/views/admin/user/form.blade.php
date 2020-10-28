<div class="row">

    <div class="col-xs-12 col-md-6">
        @include('admin.partials.errors')
        <form action="" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <label for="firstName">نام کامل</label>
                <input type="text" name="name"  class="form-control" id="firstName" placeholder="نام و فامیلی خود را به صورت کامل و با حروف فارسی وارد کنید. ">
            </div>
            <div class="form-group">
                <label for="email">آدرس ایمیل </label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">email@example.com</small>
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <input type="password" name="password" class="form-control" id="password">
                <small id="passwordHelp" class="form-text text-muted">رمز عبور باید حداقل ۶ حرف و ترکیبی از حروف و اعداد باشد.</small>
            </div>

            <div class="form-group">
                <label for="role">نقش کاربر</label>
                <select  class="form-control" name="role" id="role">
                    <option value=1>کاربر عادی</option>
                    <option value=2> اپراتور</option>
                    <option value=3>مدیر</option>
                </select>
            </div>
            <div class="form-group">
                <label for="wallet">موجودی کیف پول</label>
                <input type="text" name="wallet" class="form-control" id="wallet" value=0>
            </div>

                <div class="form-group">
                    {{--                <input type="submit" name="submit" class="form-control" id="save" value="ثبت اطلاعات">--}}
                    <button type="submit" name="submit-user" class="btn btn-success btn-lg ">ثبت اطلاعات</button>
                </div>

        </form>
    </div>
</div>



