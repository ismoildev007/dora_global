<x-layouts.auth>
    <div class="admin">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-8">
                    <div class="edit-profile">
                        <div class="edit-profile__logos">
                            <a href="#">
                                <img class="dark" src="/admin/img/logo-dark.png" alt="">
                                <img class="light" src="/admin/img/logo-white.png" alt="">
                            </a>
                        </div>
                        <div class="card border-0">
                            <div class="card-header">
                                <div class="edit-profile__title">
                                    <h6>Sign Up Dora-Global</h6>
                                </div>
                            </div>
                            <form action="{{ route('authenticate') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="edit-profile__body">
                                        <div class="edit-profile__body">
                                            <div class="form-group mb-20">
                                                <label for="email">Email Adress</label>
                                                <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email">
                                                @error('email')
                                                <label class="text-danger" for="">Ro'yhatdan o'tmagan email bilan kirish taqiqlanadi</label>
                                                @enderror
                                            </div>
                                            <div class="form-group mb-15">
                                                <label for="password-field">password</label>
                                                <div class="position-relative">
                                                    <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                                    <div class="uil uil-eye-slash text-lighten fs-15 field-icon toggle-password2"></div>
                                                    @error('password')
                                                    <label class="text-danger" for="">Parol xato</label>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="admin-condition">
                                                <div class="checkbox-theme-default custom-checkbox ">
                                                    <input class="checkbox" type="checkbox" id="admin-1">
                                                    <label for="admin-1">
                                              <span class="checkbox-text">Creating an account means you’re okay
                                                 with our <a href="#" class="color-primary">Terms of
                                                    Service</a> and <a href="#" class="color-primary">Privacy
                                                    Policy</a>
                                                 my preference</span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="admin__button-group button-group d-flex pt-1 justify-content-md-start justify-content-center">
                                                <button type="submit" class="btn btn-primary btn-default w-100 btn-squared text-capitalize lh-normal px-50 signIn-createBtn ">
                                                    Create Account
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End: .card-body -->
                            </form>
                            <div class="px-20">
                                <p class="social-connector social-connector__admin text-center">
                                    <span>Or</span>
                                </p>
                                <div class="button-group d-flex align-items-center justify-content-center">
                                    <ul class="admin-socialBtn">
                                        <li>
                                            <button class="btn text-dark google">
                                                <img class="svg" src="/admin/img/google-Icon.svg" alt="img" />
                                            </button>
                                        </li>
                                        <li>
                                            <button class=" radius-md wh-48 content-center facebook">
                                                <i class="uil uil-facebook-f"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="radius-md wh-48 content-center twitter">
                                                <i class="uil uil-twitter"></i>
                                            </button>
                                        </li>
                                        <li>
                                            <button class="radius-md wh-48 content-center github">
                                                <i class="uil uil-github"></i>
                                            </button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- End: .card -->
                    </div><!-- End: .edit-profile -->
                </div><!-- End: .col-xl-5 -->
            </div>
        </div>
    </div>
</x-layouts.auth>

