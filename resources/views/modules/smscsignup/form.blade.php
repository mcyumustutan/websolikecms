{!! RecaptchaV3::initJs() !!}

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9">





            <hr>
            <div class="contact">
                <h4 class="contact-heading">SMS için Kayıt Ol</h4>
                <hr>
                <div x-data="SolutionCenterForm()">
                    <div id="response"></div>
                    <form method="post" class="contact-form" @submit.prevent="submitForm">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="container my-4">

                            <!-- KİŞİ TÜRÜ -->
                            <div class="  mb-3">
                                <div class="card-body">
                                    <label class="form-label fw-bold">Kişi Türü</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" id="gercek" value="0" checked>
                                        <label class="form-check-label" for="gercek">
                                            Gerçek Kişi
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="type" id="tuzel" value="1">
                                        <label class="form-check-label" for="tuzel">
                                            Tüzel Kişi (İşletmeler)
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- GERÇEK KİŞİ -->
                            <div id="gercek_kisi" class="mb-3">
                                <div class="card-header fw-bold">Gerçek Kişi Bilgileri</div>
                                <div class="card-body row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Adı Soyadı</label>
                                        <input type="text" class="form-control" name="tamad">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">T.C. Kimlik No</label>
                                        <input type="text" class="form-control" name="tc">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Doğum Tarihi</label>
                                        <input type="date" class="form-control" name="dogumtarihi">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Cep Telefonu</label>
                                        <input type="text" class="form-control" name="telefon">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">Adres</label>
                                        <textarea class="form-control" rows="2" name="adres"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- TÜZEL KİŞİ -->
                            <div id="tuzel_kisi" class="  mb-3 d-none">
                                <div class="card-header fw-bold">Tüzel Kişi Bilgileri</div>
                                <div class="card-body row g-3">
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Unvan / İşletme Adı</label>
                                        <input type="text" class="form-control" name="unvan">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Vergi Dairesi</label>
                                        <input type="text" class="form-control" name="vergi_dairesi">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Vergi No</label>
                                        <input type="text" class="form-control" name="vergi_no">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Yetkili Adı Soyadı</label>
                                        <input type="text" class="form-control" name="tamad">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Cep Telefonu</label>
                                        <input type="text" class="form-control" name="telefon">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">T.C. Kimlik No</label>
                                        <input type="text" class="form-control" name="tc">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <label class="form-label">Doğum Tarihi</label>
                                        <input type="date" class="form-control" name="dogumtarihi">
                                    </div>
                                    <div class="col-12">
                                        <label class="form-label">İşletme Adresi</label>
                                        <textarea class="form-control" rows="2" name="adres"></textarea>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-sm-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="kvkk" name="kvkk">
                                <label class="form-check-label" for="kvkk">
                                    <a href="{{config('app.url')}}/{{App::getLocale()}}/aydinlatma-metni" target="_blank">Aydınlatma Metni</a>'ni okudum, anladım, onaylıyorum.
                                </label>
                            </div>

                        </div>

                        <div class="mt-20">
                            {!! RecaptchaV3::field('register') !!}
                            <button :disabled="formLoading" x-text="buttonText" class="send-btn">Kaydol</button>

                        </div>
                    </form>

                    <div class="mt-20" id="response"></div>
                </div>



            </div>
        </div>
    </div>
</div>
<style>
    .grecaptcha-badge {
        visibility: hidden !important;
    }
</style>

<script>
 

    $(function() {

        function toggleForm(type) {

            if (type === '0') {
                $('#gercek_kisi')
                    .removeClass('d-none')
                    .find(':input')
                    .prop('disabled', false);

                $('#tuzel_kisi')
                    .addClass('d-none')
                    .find(':input')
                    .prop('disabled', true);
            } else {
                $('#tuzel_kisi')
                    .removeClass('d-none')
                    .find(':input')
                    .prop('disabled', false);

                $('#gercek_kisi')
                    .addClass('d-none')
                    .find(':input')
                    .prop('disabled', true);
            }
        }

        // Sayfa açılışında (Gerçek kişi seçili)
        toggleForm('0');

        // Değişim
        $('input[name="type"]').on('change', function() {
            toggleForm(this.value);
        });

    });
</script>
<script src="{{ asset('plugins/jQuery-Mask-Plugin-master/jquery.mask.min.js')}}"></script>
<script>
    const SOLUTIONCENTERFORMURL = "{{Route('smssignup.send')}}";

    $(document).on("submit", "form", function(e) {

        grecaptcha.ready(function() {
            grecaptcha.execute("{{ env('RECAPTCHAV3_SITEKEY') }}", {
                action: 'subscribe_newsletter'
            }).then(function(token) {
                $('#g-recaptcha-response').val(token);
                $(this).unbind('submit').submit();
            });
        });

        e.preventDefault();
        var postData = $(this).serializeArray();
        var formURL = $(this).attr("action");
        $.ajax({
            url: SOLUTIONCENTERFORMURL,
            dataType: "json",
            type: "POST",
            data: postData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            beforeSend: function(data, textStatus, jqXHR) {
                $('.send-btn').hide()
                $('#response').html("")
            },
            success: function(data, textStatus, jqXHR) {
                $('.contact-form').hide();
                $('#response').removeClass("alert alert-danger").addClass("alert alert-success");
                $('#response').html(data.success)
            },
            error: function(data) {
                $('#response').html("")
                $('.send-btn').show()
                if (data.status === 422) {
                    var errors = $.parseJSON(data.responseText);
                    $.each(errors, function(key, value) {
                        $('#response').removeClass("alert alert-success").addClass("alert alert-danger");

                        if ($.isPlainObject(value)) {
                            $.each(value, function(key, value) {
                                // console.log(key + " " + value);
                                $('#response').show().append(value + "<br/>");
                            });
                        }
                    });
                }
            }
        });
    })
</script>