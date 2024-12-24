{!! RecaptchaV3::initJs() !!}

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-xl-7 col-lg-9">
            <div class="contact">
                <h4 class="contact-heading">SMS Listesi Kaydı</h4>
                <div x-data="SolutionCenterForm()">
                    <div id="response"></div>
                    <form method="post" class="contact-form" @submit.prevent="submitForm">
                        <meta name="csrf-token" content="{{ csrf_token() }}">

                        <div class="row g-4">
                            <div class="col-sm-6">
                                <input name="tamad" class="custom-form" type="text" placeholder="Adınız ve Soyadınız">
                            </div>
                            <div class="col-sm-6">
                                <input name="dogumtarihi" class="custom-form" type="text" placeholder="Doğum Tarihi" data-mask="00.00.0000">
                            </div>
                            <div class="col-sm-6">
                                <input name="telefon" class="custom-form" type="text" placeholder="Telefon Numaranız" data-mask="+90 (000) 000-0000" value="+90">
                                <span class="help-text">Örnek +90 555 5555</span>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="kvkk" name="kvkk">
                                    <label class="form-check-label" for="kvkk">
                                        <a href="{{config('app.url')}}/{{App::getLocale()}}/aydinlatma-metni" target="_blank">Aydınlatma Metni</a>'ni okudum, anladım, onaylıyorum.
                                    </label>
                                </div>

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