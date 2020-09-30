@extends('layouts.front')



@section('content')


            <div id="text_custom2">
            About

            </div>

            <p>
                <br>
                <h2 id="text_custom3">O aplikaciji</h2>
                <p>Forum je web aplikacija namijenjena kreiranju, čitanju i komentiranju objava (postova) korisnika. Korisnik može uređivati
                i brisati svoje objave te može likeati i komentirati objave ostalih korisnika.Da bi pristupio aplikaciji korisnik se mora
                registrirati (klikom na register dugme). Aplikacija je rađena pomoću Laravel frameworka.</p>
                <h2 id="text_custom3">O frameworku</h2>
                <p>Laravel je open-source web framework. Baziran je na PHP-u, odnosno Simfony framework-u. Razvio ga je Taylor Otwell s
                ciljem razvoja web aplikacija prateći model–view–controller (MVC) arhitekturu. Smatra se jednim od najpopularnijih PHP framework-a.
                Cijeli izvorni kod Laravel-a nalazi se na GitHub-u pod MIT licencom. <a href="https://hr.wikipedia.org/wiki/Laravel">(Wikipedija)</a></p>
                <p>Verzija Frameworka koju mi koristimo je: 7.14.1</p>
                <h2 id="text_custom3">Login</h2>
                <p>
                    <div id="div_custom">
                        Administrator
                         <ul>
                         <li>
                             <a href=''>E-mail: admin@example.com</a>
                         </li>
                         <li>
                          <a href=''>Password: administrator2020</a>
                         </li>
                       </ul>
                     </div>

                     <div id="div_custom">
                        Korisnik
                          <ul>
                               <li>
                                 <a href=''>E-mail: korisnik@example.com</a>
                               </li>
                               <li>
                                <a href=''>Password: korisnik2020</a>
                               </li>
                            </ul>
                     </div>
                </p><br>
                <p id="p_custom">&copy; Made by: Tomislav Babović i Paolo Kos</p>
            </p>

@endsection

