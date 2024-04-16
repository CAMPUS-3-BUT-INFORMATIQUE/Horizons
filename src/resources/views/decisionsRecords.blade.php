@extends('base')

@section('container')
    <div>
        <h1>Relevés des décisions</h1>
    </div>

    <ul>
        <li>
            <h1>Relevés des décisions votées recensées</h1>
            <div class="w-2/3">
                <div class="relative right-0">
                    <ul
                        class="relative flex flex-wrap p-1 list-none rounded-xl bg-blue-gray-50/60"
                        data-tabs="tabs"
                        role="list"
                    >
                        <li class="z-30 flex-auto text-center">
                            <a
                                class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all
                                ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target=""
                                active=""
                                role="tab"
                                aria-selected="true"
                                aria-controls="2023"
                            >
                                <span class="ml-1">2023</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a
                                class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all
                                ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target=""
                                role="tab"
                                aria-selected="false"
                                aria-controls="2022"
                            >
                                <span class="ml-1">2022</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a
                                class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target=""
                                role="tab"
                                aria-selected="false"
                                aria-controls="2020"
                            >
                                <span class="ml-1">2020</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a
                                class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target=""
                                role="tab"
                                aria-selected="false"
                                aria-controls="2019"
                            >
                                <span class="ml-1">2019</span>
                            </a>
                        </li>
                        <li class="z-30 flex-auto text-center">
                            <a
                                class="z-30 flex items-center justify-center w-full px-0 py-1 mb-0 transition-all ease-in-out border-0 rounded-lg cursor-pointer text-slate-700 bg-inherit"
                                data-tab-target=""
                                role="tab"
                                aria-selected="false"
                                aria-controls="2014"
                            >
                                <span class="ml-1">2014</span>
                            </a>
                        </li>
                    </ul>
                    <div data-tab-content="" class="p-5">
                        <div class="block opacity-100" id="2023" role="tabpanel">
                            <div>
                                Relevés des décisions et avis du
                                Conseil académique plénier du 12 décembre 2023
                                <span>(577 Ko)</span>
                                <a href="https://www.unicaen.fr/wp-content/uploads/2023/12/UNICAEN-DAJI-Releve-Avis-CAC-12.12.2023.pdf">
                                    Télécharger
                                </a>
                            </div>

                            <div><a
                                    id="wp-block-file--media-f346d75b-9574-4320-9652-fd65f58e0c3e"
                                    href="https://www.unicaen.fr/wp-content/uploads/2023/10/UNICAEN-DAJI-CAC-BulletinDecision-2023-10-12.pdf">Relevés
                                    des décisions et avis du Conseil académique plénier du 12 octobre
                                    2023<span>(531 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2023/10/UNICAEN-DAJI-CAC-BulletinDecision-2023-10-12.pdf"
                                    Télécharger</a>
                            </div>


                            <div><a
                                    id="wp-block-file--media-f346d75b-9574-4320-9652-fd65f58e0c3e"
                                    href="https://www.unicaen.fr/wp-content/uploads/2023/07/UNICAEN_DAJI_CAC_2023-06-28.pdf">Relevé
                                    des décisions et avis du Conseil académique plénier du 28 juin
                                    2023<span>(309 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2023/07/UNICAEN_DAJI_CAC_2023-06-28.pdf"
                                    class="wp-block-file__button wp-element-button" download=""
                                    aria-describedby="wp-block-file--media-f346d75b-9574-4320-9652-fd65f58e0c3e">Télécharger</a>
                            </div>


                            <div><a
                                    id="wp-block-file--media-cfb7f076-2ccc-4db2-80c0-025edcb37821"
                                    href="https://www.unicaen.fr/wp-content/uploads/2023/03/UNICAEN_DAJI_CAC_bulletin_decisions_2023-03-01.pdf">Relevés
                                    des décisions et avis du Conseil académique plénier du 1er mars
                                    2023<span>(280 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2023/03/UNICAEN_DAJI_CAC_bulletin_decisions_2023-03-01.pdf"
                                    class="wp-block-file__button wp-element-button" download=""
                                    aria-describedby="wp-block-file--media-cfb7f076-2ccc-4db2-80c0-025edcb37821">Télécharger</a>
                            </div>
                        </div>

                        <div class="hidden opacity-0" id="2022" role="tabpanel">
                            <div><a
                                    id="wp-block-file--media-c00c9dda-011f-447b-a9ab-036ad7470406"
                                    href="https://www.unicaen.fr/wp-content/uploads/2022/12/UNICAEN_DAJI_CAC_decisions_2022-12-06.pdf">Relevés
                                    des décisions et avis du Conseil académique plénier du 6 décembre
                                    2022<span>(348 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2022/12/UNICAEN_DAJI_CAC_decisions_2022-12-06.pdf"
                                    class="wp-block-file__button wp-element-button" download=""
                                    aria-describedby="wp-block-file--media-c00c9dda-011f-447b-a9ab-036ad7470406">Télécharger</a>
                            </div>


                            <div><a
                                    id="wp-block-file--media-23a131c6-023c-4039-a55d-7e1f94fef471"
                                    href="https://www.unicaen.fr/wp-content/uploads/2022/10/UNICAEN_DAJI_CAC_decisions_2022-10-05.pdf">Relevés
                                    des décisions et avis du Conseil académique plénier du 5 octobre
                                    2022<span>(750 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2022/10/UNICAEN_DAJI_CAC_decisions_2022-10-05.pdf"
                                    class="wp-block-file__button wp-element-button" download=""
                                    aria-describedby="wp-block-file--media-23a131c6-023c-4039-a55d-7e1f94fef471">Télécharger</a>
                            </div>
                        </div>
                        <div class="hidden opacity-0" id="2020" role="tabpanel">
                            <p></p>
                            <div><a
                                    id="wp-block-file--media-3f9bc187-51ac-40c9-93a6-ad987852bae1"
                                    href="https://www.unicaen.fr/wp-content/uploads/2020/10/UNICAEN_DAJI_CAC_decisions_2020-09-01.pdf">Relevés
                                    des décisions et avis du Conseil académique plénier du 1er septembre
                                    2020<span>(1.12 Mo)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2020/10/UNICAEN_DAJI_CAC_decisions_2020-09-01.pdf"
                                    class="wp-block-file__button wp-element-button" download=""
                                    aria-describedby="wp-block-file--media-3f9bc187-51ac-40c9-93a6-ad987852bae1">Télécharger</a>
                            </div>
                        </div>
                        <div class="hidden opacity-0" id="2019" role="tabpanel">
                            <p></p>
                            <div><a
                                    id="wp-block-file--media-12db95c9-f5bf-406e-8eb5-0bb1af18de82"
                                    href="https://www.unicaen.fr/wp-content/uploads/2020/10/UNICAEN_DAJI_CAC_decisions_2019-04-03.pdf">Relevé
                                    des décisions et avis du Conseil Académique du 03 avril
                                    2019<span>(324 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2020/10/UNICAEN_DAJI_CAC_decisions_2019-04-03.pdf"
                                    class="wp-block-file__button wp-element-button" download=""
                                    aria-describedby="wp-block-file--media-12db95c9-f5bf-406e-8eb5-0bb1af18de82">Télécharger</a>
                            </div>
                        </div>
                        <div class="hidden opacity-0" id="2014" role="tabpanel">
                            <p></p>
                            <div><a
                                    id="wp-block-file--media-ba728866-87a3-4664-bbb2-cbad84f96a41"
                                    href="https://www.unicaen.fr/wp-content/uploads/2020/10/UNICAEN_DAJI_CAC_decisions_2014-06-24.pdf">Relevé
                                    des décisions et avis du Conseil Académique du 24 juin
                                    2014<span>(31 Ko)</span></a><a
                                    href="https://www.unicaen.fr/wp-content/uploads/2020/10/UNICAEN_DAJI_CAC_decisions_2014-06-24.pdf">Télécharger</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li>
            <div>
                <h1>Phrase handicap</h1>
            </div>
        </li>

        <li>
            <div>
                <h1>Conseils de département</h1>
            </div>
        </li>
    </ul>

    <div class="tabs">
        <ul class="tabs-nav">
            <li class="tabs-nav-item"><a class="tabs-nav-link" href="#tab1">Tab 1</a></li>
            <li class="tabs-nav-item"><a class="tabs-nav-link" href="#tab2">Tab 2</a></li>
            <li class="tabs-nav-item"><a class="tabs-nav-link" href="#tab3">Tab 3</a></li>
            <li class="tabs-nav-item"><a class="tabs-nav-link" href="#tab4">Tab 4</a></li>
            <li class="tabs-nav-item"><a class="tabs-nav-link" href="#tab5">Tab 5</a></li>
        </ul>
        <div class="tabs-content">
            <div id="tab1" class="tabs-panel">
                <p>Contenu de l'onglet 1</p>
            </div>
            <div id="tab2" class="tabs-panel hidden">
                <p>Contenu de l'onglet 2</p>
            </div>
            <div id="tab3" class="tabs-panel hidden">
                <p>Contenu de l'onglet 3</p>
            </div>
            <div id="tab4" class="tabs-panel hidden">
                <p>Contenu de l'onglet 4</p>
            </div>
            <div id="tab5" class="tabs-panel hidden">
                <p>Contenu de l'onglet 5</p>
            </div>
        </div>
    </div>

@endsection
