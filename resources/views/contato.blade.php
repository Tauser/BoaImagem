<x-app-layout>
    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-xl-8 offset-xl-2">
                    <div class="pageBannerContent text-center">
                        <h2>Fale Conosco</h2>
                        <div class="pageBannerPath">
                            <a href="{{ route('sobre') }}">HOME</a>
                            <span class="brdSeparator">&nbsp;/&nbsp;</span>
                            <span>CONTATO</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contactInfoSec">
        <div class="container">
            <div class="row contactInfoRow">
                <div class="col-md-4 col-sm-6">
                    <div class="contactInfoItem" data-aos="fade-down" data-aos-easing="linear">
                        <h4>Duvidas</h4>
                        <ul>
                            <li>(61) 12345-6789</li>
                            <li>contato@boaimagem.org</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contactInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="650">
                        <h4>Localização</h4>
                        <ul>
                            <li>Sala comercial SUL, </li>
                            <li>próximo a caixa ecnomica</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="contactInfoItem" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="650">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contactFormSec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 data-aos="fade-up" data-aos-easing="linear" data-aos-duration="800">ENTRAR EM CONTATO <br>
                        CONOSCO</h2>
                    <form action="{{route('contato.send')}}" method="post" id="contactForm">
                        @csrf
                        <div class="row">
                            <div class="col-md-6" data-aos="fade-up">
                                <input type="text" name="name" id="name" placeholder="Seu nome" required>
                            </div>
                            <div class="col-md-6" data-aos="fade-up">
                                <input type="text" name="whatsapp" id="whatsapp" placeholder="Seu telefone/Whatsapp" required>
                            </div>
                            <div class="col-md-12" data-aos="fade-up">
                                <textarea name="message" id="message" placeholder="Fale mais sobre seu projeto" required></textarea>
                            </div>
                            <div class="col-md-12" data-aos="fade-up">
                                <button class="solidBTn ContactSubmit magic-hover" type="submit" value="Enviar"
                                    data-radius="0" data-border-color="#FFF"><span>Enviar</span></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
