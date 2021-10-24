<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HomeServices extends Component
{
    public array $services;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->services = [
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="40.645 25 118.711 149.999" viewBox="40.645 25 118.711 149.999" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-hq7f4qjpyu0t"><defs><style>#comp-krajy2bf svg [data-color="1"] {fill: #FFDE59;}</style></defs><title id="svgcid-hq7f4qjpyu0t"></title>
    <g>
        <path d="M94.432 67.087a4.69 4.69 0 0 0 4.688 4.688h55.548c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688H99.12a4.69 4.69 0 0 0-4.688 4.688z" fill="#22495A" data-color="1"></path>
        <path d="M81.691 62.399h-6.735c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h6.735c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688z" fill="#22495A" data-color="1"></path>
        <path d="M99.12 84.341c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h34.024c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688H99.12z" fill="#22495A" data-color="1"></path>
        <path d="M81.691 84.341h-6.735c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h6.735c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688z" fill="#22495A" data-color="1"></path>
        <path d="M154.668 106.284H99.12c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h55.548c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688z" fill="#22495A" data-color="1"></path>
        <path d="M81.691 106.284h-6.735c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h6.735c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688z" fill="#22495A" data-color="1"></path>
        <path d="M133.144 137.598c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688H99.12c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h34.024z" fill="#22495A" data-color="1"></path>
        <path d="M81.691 128.223h-6.735c-2.588 0-4.688 2.1-4.688 4.688s2.1 4.688 4.688 4.688h6.735c2.588 0 4.688-2.1 4.688-4.688s-2.1-4.688-4.688-4.688z" fill="#22495A" data-color="1"></path>
        <path d="M142.207 145.987a4.69 4.69 0 0 0-4.688 4.688v9.854a5.101 5.101 0 0 1-5.096 5.096H55.116a5.101 5.101 0 0 1-5.096-5.096V39.471a5.101 5.101 0 0 1 5.096-5.096h77.307a5.101 5.101 0 0 1 5.096 5.096v8.078c0 2.588 2.1 4.688 4.688 4.688s4.688-2.1 4.688-4.688v-8.078c0-7.98-6.491-14.471-14.471-14.471H55.116c-7.98 0-14.471 6.491-14.471 14.471v121.057c0 7.98 6.491 14.471 14.471 14.471h77.307c7.98 0 14.471-6.491 14.471-14.471v-9.854a4.688 4.688 0 0 0-4.687-4.687z" fill="#22495A" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-secondary-color',
                'font_color' => 'text-white',
                'title' => 'Presentaciones',
                'copy' => 'Una oportunidad única para vender una idea; sea interna o externa, solo tienes pocos segundos para enganchar a tu público. ',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="16.007 0 448.163 480.179" viewBox="16.007 0 448.163 480.179" xmlns="http://www.w3.org/2000/svg" data-type="shape" role="presentation" aria-hidden="true" aria-labelledby="svgcid-utgouvf1td84"><title id="svgcid-utgouvf1td84"></title>
    <g>
        <path d="M184.171 256.178c-35.33.04-63.96 28.67-64 64 0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-35.346-28.654-64-64-64zm8 16.72c20.1 3.435 35.845 19.18 39.28 39.28h-39.28v-39.28zm-40.093 11.583a47.877 47.877 0 0 1 24.093-11.583v44.472l-27.768 34.712c-17.653-19.682-16.008-49.948 3.675-67.601zm32.093 83.697a47.703 47.703 0 0 1-23.296-6.064l27.144-33.936h43.432c-3.919 23.067-23.883 39.957-47.28 40z"></path>
        <path d="M136.171 400.178v16h-16v-16h16z"></path>
        <path d="M248.171 400.178v16h-96v-16h96z"></path>
        <path d="M248.171 432.178v16h-128v-16h128z"></path>
        <path d="M312.171 400.178v16h-16v-16h16z"></path>
        <path d="M424.171 400.178v16h-96v-16h96z"></path>
        <path d="M424.171 432.178v16h-128v-16h128z"></path>
        <path d="M328.171 80.178v16h-16v-16h16z"></path>
        <path d="M424.171 80.178v16h-80v-16h80z"></path>
        <path d="M424.171 112.178v16h-112v-16h112z"></path>
        <path d="M328.171 168.178v16h-16v-16h16z"></path>
        <path d="M424.171 168.178v16h-80v-16h80z"></path>
        <path d="M424.171 200.178v16h-112v-16h112z"></path>
        <path d="M408.171 304.178h-24v-40a8 8 0 0 0-8-8h-32a8 8 0 0 0-8 8v24h-24a8 8 0 0 0-8 8v80a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8v-64a8 8 0 0 0-8-8zm-72 64h-16v-64h16v64zm32 0h-16v-96h16v96zm32 0h-16v-48h16v48z"></path>
        <path d="M288.171 72.178h-96a8 8 0 0 0-8 8v48a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8v-48a8 8 0 0 0-8-8zm-8 48h-80v-32h80v32z"></path>
        <path d="M288.171 160.178h-96a8 8 0 0 0-8 8v48a8 8 0 0 0 8 8h96a8 8 0 0 0 8-8v-48a8 8 0 0 0-8-8zm-8 48h-80v-32h80v32z"></path>
        <path d="M456.171 32.178H147.995C125.998-.948 81.312-9.97 48.185 12.028c-33.126 21.997-42.148 66.684-20.151 99.81a72.008 72.008 0 0 0 20.136 20.141v108.2a7.999 7.999 0 0 0 1.752 5l30.248 37.808v189.192a8 8 0 0 0 8 8h368a8 8 0 0 0 8-8v-432a8 8 0 0 0-7.999-8.001zm-396 88.448C33.414 105.115 24.297 70.85 39.808 44.093a56.002 56.002 0 0 1 48.363-27.915c30.928.047 55.962 25.157 55.915 56.085a56 56 0 0 1-27.915 48.363 8 8 0 0 0-4 6.92v16.632h-16V99.49l21.656-21.656-11.312-11.312-18.344 18.344-18.344-18.344-11.312 11.312L80.171 99.49v44.688h-16v-16.632a8 8 0 0 0-4-6.92zm4 55.552v-16h48v16h-48zm48 16v40h-16v-40h16zm-48 0h16v40h-16v-40zm8.64 56h30.72l-15.36 19.2-15.36-19.2zm375.36 216h-352V282.986l30.248-37.808a7.999 7.999 0 0 0 1.752-5v-108.2a72.246 72.246 0 0 0 32-59.8 71.483 71.483 0 0 0-4.2-24h292.2v416z"></path>
    </g>
</svg>',
                'background_color' => 'bg-third-color',
                'font_color' => 'text-white',
                'title' => 'Infografías',
                'copy' => 'A través del Visual Thinking facilitamos la comprensión y recuerdo de tus mensajes. No importa el nivel de complejidad, nos involucramos, entendemos y buscamos la manera más eficiente para trasladarlo.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="10 30 180 140" viewBox="10 30 180 140" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-a119x0-jtmbsl"><defs><style>#comp-krajy2br2 svg [data-color="1"] {fill: #000000;}</style></defs><title id="svgcid-a119x0-jtmbsl"></title>
    <g>
        <path fill="#0071BC" d="M78.437 52.55v9.396h-45V52.55h45z" data-color="1"></path>
        <path fill="#0071BC" d="M78.437 73.221v10.336h-45V73.221h45z" data-color="1"></path>
        <path fill="#0071BC" d="M78.437 93.893v9.396h-45v-9.396h45z" data-color="1"></path>
        <path fill="#0071BC" d="M78.437 115.503v9.396h-45v-9.396h45z" data-color="1"></path>
        <path fill="#0071BC" d="M165.624 52.55v9.396h-44.062V52.55h44.062z" data-color="1"></path>
        <path fill="#0071BC" d="M165.624 73.221v10.336h-44.062V73.221h44.062z" data-color="1"></path>
        <path fill="#0071BC" d="M165.624 93.893v9.396h-44.062v-9.396h44.062z" data-color="1"></path>
        <path fill="#0071BC" d="M165.624 115.503v9.396h-44.062v-9.396h44.062z" data-color="1"></path>
        <path d="M190 30H10v118.389h68.437V170H88.75v-21.611H190V30zM20.312 39.396h75v98.658h-75V39.396zm160.313 98.658h-75.938V39.396h75.938v98.658z" fill="#0071BC" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-primary-color',
                'font_color' => 'text-black',
                'title' => 'Folletos',
                'copy' => 'La comunicación impresa y digital refleja la calidad de tus productos y servicios. Con nuestro diseño y nuestra creatividad conseguirás destacar.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="16.5 15.959 167.001 167.941" viewBox="16.5 15.959 167.001 167.941" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-na92j7-h70tkz"><defs><style>#comp-krnjpsl4 svg [data-color="1"] {fill: #000000;}</style></defs><title id="svgcid-na92j7-h70tkz"></title>
    <g>
        <path d="M180.3 19.2c-3.7-3.7-9.9-4.9-14.7 0l-11.1 11.2c-.4-.3-.9-.4-1.5-.4H20c-1.9 0-3.5 1.6-3.5 3.5v146.9c0 1.9 1.5 3.5 3.5 3.5h132.1c1.9 0 3.5-1.6 3.5-3.5V61.9c0-.9-.3-1.6-.9-2.2L180.3 34c4.8-4.9 3.7-11.1 0-14.8zm-31.6 157.7H23.5V37h124.3L99.1 86c-.3.3-.5.6-.7.9l-9.8 19.8c-.7 1.4-.4 3 .7 4 .7.7 1.5 1 2.5 1 .5 0 1-.1 1.5-.3l19.7-9.9c.3-.2.6-.4.9-.7l34.8-35v111.1zm26.7-147.8l-66 66.4-9.8 4.9 4.9-9.9 66-66.4c2.3-2.3 4.5-.3 4.9 0 .4.5 2.3 2.6 0 5z" fill="#0f0f72" data-color="1"></path>
        <path d="M126.8 150.7H47.7c-1.9 0-3.5 1.6-3.5 3.5s1.5 3.5 3.5 3.5h79.1c1.9 0 3.5-1.6 3.5-3.5 0-2-1.5-3.5-3.5-3.5z" fill="#0f0f72" data-color="1"></path>
        <path d="M44.2 128.8c0 1.9 1.5 3.5 3.5 3.5h79.1c1.9 0 3.5-1.6 3.5-3.5s-1.5-3.5-3.5-3.5H47.7c-1.9 0-3.5 1.6-3.5 3.5z" fill="#0f0f72" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-fourth-color',
                'font_color' => 'text-black',
                'title' => 'Formularios',
                'copy' => 'Simplificamos tus formularios, los automatizamos disminuyendo errores y ahorrando tiempo de tu equipo.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="29.5 29.5 141 141" viewBox="29.5 29.5 141 141" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--c0rwb3asxi11"><title id="svgcid--c0rwb3asxi11"></title>
    <g>
        <path d="M166.5 96h-19.95a4 4 0 0 0 0 8h15.823c-1.985 31.281-27.092 56.37-58.373 58.358V77.06c11.308-1.91 19.95-11.767 19.95-23.61 0-13.206-10.744-23.95-23.95-23.95S76.05 40.244 76.05 53.45c0 11.843 8.642 21.7 19.95 23.61v85.298C64.719 160.37 39.612 135.281 37.627 104H53.45a4 4 0 0 0 0-8H33.5a4 4 0 0 0-4 4c0 38.874 31.626 70.5 70.5 70.5s70.5-31.626 70.5-70.5a4 4 0 0 0-4-4zM84.05 53.45c0-8.795 7.155-15.95 15.95-15.95s15.95 7.155 15.95 15.95S108.795 69.4 100 69.4s-15.95-7.155-15.95-15.95z" fill="#000001" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-third-color',
                'font_color' => 'text-white',
                'title' => 'Catálogos y Presentaciones Navegables',
                'copy' => 'Da la opción de que el usuario sea el que decide qué quiere ver y cuándo, gracias a permitir la navegación libre dentro de la infografía.

 

Posibilita centrarse y profundizar en los detalles que realmente le interesan.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="24.5 34 150.903 132" xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="24.5 34 150.903 132" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid--lum4mehqj5pl"><defs><style>#comp-krnjsse0 svg [data-color="1"] {fill: #000000;}</style></defs><title id="svgcid--lum4mehqj5pl"></title>
    <g>
        <path fill="#72625a" d="M168.1 71.7l-6.2-9.3v-8.1c0-2.9-2.4-5.3-5.3-5.3h-36.1v-9c0-3.3-2.7-6-6-6h-69c-3.3 0-6 2.7-6 6v11.2l-7.8 14.1c-4.7 8.4-7.2 18-7.2 27.7v70c0 1 .5 1.9 1.3 2.5.5.3 1.1.5 1.7.5.4 0 .8-.1 1.1-.2l13.9-5.6 13.9 5.6c.4.1.7.2 1.1.2h78c1.7 0 3-1.3 3-3v-13.1h33.9c1.7 0 3-1.3 3-3v-51c.1-8.6-2.5-17-7.3-24.2zm-12.2-11.4h-29.3l-3.5-5.3h32.8v5.3zM41.4 154.2l-10.9 4.4V93c0-8.6 2.2-17.2 6.4-24.8l5.6-10 5.6 10c4.2 7.6 6.4 16.1 6.4 24.8v65.6l-10.9-4.4c-.7-.3-1.5-.3-2.2 0zm91.1 5.8h-72V93c0-9.7-2.5-19.2-7.2-27.7l-7.8-14.1V40h69v9H57.3c-1.7 0-3 1.3-3 3s1.3 3 3 3h58.6l8 12.1c5.6 8.4 8.6 18.2 8.6 28.3V160zm37-16.1h-30.9V95.4c0-10.3-2.8-20.3-8-29.1h26.8l5.8 8.8c4.1 6.2 6.3 13.4 6.3 20.9v47.9z" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-secondary-color',
                'font_color' => 'text-white',
                'title' => 'Destacada en el PDV',
                'copy' => 'Contamos con expertos en FMOT (First moment of Truth) que te ayudarán a generar impacto en piso de venta a través de materiales y propuestas de packaging para tus productos.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="29.5 29.5 141 141" viewBox="29.5 29.5 141 141" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-7jxelfpzndih"><defs><style>#comp-krnjwyyr svg [data-color="1"] {fill: #FFDE59;}</style></defs><title id="svgcid-7jxelfpzndih"></title>
    <g>
        <path d="M166.5 62.75h-20.301c2.716-3.493 4.351-7.867 4.351-12.625 0-11.373-9.252-20.625-20.625-20.625-11.063 0-20.468 6.465-27.195 18.697a62.424 62.424 0 0 0-2.729 5.643 62.964 62.964 0 0 0-2.729-5.643C90.543 35.965 81.139 29.5 70.075 29.5c-11.373 0-20.625 9.252-20.625 20.625 0 4.758 1.635 9.132 4.351 12.625H33.5a4 4 0 0 0-4 4V100a4 4 0 0 0 4 4h9.3v62.5a4 4 0 0 0 4 4h106.4a4 4 0 0 0 4-4V104h9.3a4 4 0 0 0 4-4V66.75a4 4 0 0 0-4-4zm-56.675-10.853c5.3-9.553 12.062-14.397 20.1-14.397 6.962 0 12.625 5.664 12.625 12.625s-5.663 12.625-12.625 12.625h-24.701c.938-2.96 2.426-6.933 4.601-10.853zM57.45 50.125c0-6.961 5.663-12.625 12.625-12.625 8.037 0 14.8 4.844 20.1 14.397 2.175 3.92 3.663 7.892 4.602 10.853H70.075c-6.962 0-12.625-5.664-12.625-12.625zM37.5 70.75H96V96H37.5V70.75zM50.8 104H96v58.5H50.8V104zm98.4 58.5H104V104h45.2v58.5zM162.5 96H104V70.75h58.5V96z" fill="#000001" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-third-color',
                'font_color' => 'text-white',
                'title' => 'Regalos Coporativos',
                'copy' => 'Porque entendemos que tus clientes internos son tu activo más valioso.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="16.5 15.959 167.001 167.941" viewBox="16.5 15.959 167.001 167.941" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-na92j7-h70tkz"><defs><style>#comp-krnjpsl4 svg [data-color="1"] {fill: #000000;}</style></defs><title id="svgcid-na92j7-h70tkz"></title>
    <g>
        <path d="M180.3 19.2c-3.7-3.7-9.9-4.9-14.7 0l-11.1 11.2c-.4-.3-.9-.4-1.5-.4H20c-1.9 0-3.5 1.6-3.5 3.5v146.9c0 1.9 1.5 3.5 3.5 3.5h132.1c1.9 0 3.5-1.6 3.5-3.5V61.9c0-.9-.3-1.6-.9-2.2L180.3 34c4.8-4.9 3.7-11.1 0-14.8zm-31.6 157.7H23.5V37h124.3L99.1 86c-.3.3-.5.6-.7.9l-9.8 19.8c-.7 1.4-.4 3 .7 4 .7.7 1.5 1 2.5 1 .5 0 1-.1 1.5-.3l19.7-9.9c.3-.2.6-.4.9-.7l34.8-35v111.1zm26.7-147.8l-66 66.4-9.8 4.9 4.9-9.9 66-66.4c2.3-2.3 4.5-.3 4.9 0 .4.5 2.3 2.6 0 5z" fill="#0f0f72" data-color="1"></path>
        <path d="M126.8 150.7H47.7c-1.9 0-3.5 1.6-3.5 3.5s1.5 3.5 3.5 3.5h79.1c1.9 0 3.5-1.6 3.5-3.5 0-2-1.5-3.5-3.5-3.5z" fill="#0f0f72" data-color="1"></path>
        <path d="M44.2 128.8c0 1.9 1.5 3.5 3.5 3.5h79.1c1.9 0 3.5-1.6 3.5-3.5s-1.5-3.5-3.5-3.5H47.7c-1.9 0-3.5 1.6-3.5 3.5z" fill="#0f0f72" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-fourth-color',
                'font_color' => 'text-black',
                'title' => 'Branding',
                'copy' => 'Te acompañamos y te asesoramos en el diseño de tu identidad corporativa, resaltando los valores únicos de cada proyecto y de la marca para crear un vínculo entre los empleados, la empresa y los clientes.',
            ],
            [
                'icon' => '<svg preserveAspectRatio="xMidYMid meet" data-bbox="16.5 15.959 167.001 167.941" viewBox="16.5 15.959 167.001 167.941" height="200" width="200" xmlns="http://www.w3.org/2000/svg" data-type="color" role="presentation" aria-hidden="true" aria-labelledby="svgcid-na92j7-h70tkz"><defs><style>#comp-krnjpsl4 svg [data-color="1"] {fill: #000000;}</style></defs><title id="svgcid-na92j7-h70tkz"></title>
    <g>
        <path d="M180.3 19.2c-3.7-3.7-9.9-4.9-14.7 0l-11.1 11.2c-.4-.3-.9-.4-1.5-.4H20c-1.9 0-3.5 1.6-3.5 3.5v146.9c0 1.9 1.5 3.5 3.5 3.5h132.1c1.9 0 3.5-1.6 3.5-3.5V61.9c0-.9-.3-1.6-.9-2.2L180.3 34c4.8-4.9 3.7-11.1 0-14.8zm-31.6 157.7H23.5V37h124.3L99.1 86c-.3.3-.5.6-.7.9l-9.8 19.8c-.7 1.4-.4 3 .7 4 .7.7 1.5 1 2.5 1 .5 0 1-.1 1.5-.3l19.7-9.9c.3-.2.6-.4.9-.7l34.8-35v111.1zm26.7-147.8l-66 66.4-9.8 4.9 4.9-9.9 66-66.4c2.3-2.3 4.5-.3 4.9 0 .4.5 2.3 2.6 0 5z" fill="#0f0f72" data-color="1"></path>
        <path d="M126.8 150.7H47.7c-1.9 0-3.5 1.6-3.5 3.5s1.5 3.5 3.5 3.5h79.1c1.9 0 3.5-1.6 3.5-3.5 0-2-1.5-3.5-3.5-3.5z" fill="#0f0f72" data-color="1"></path>
        <path d="M44.2 128.8c0 1.9 1.5 3.5 3.5 3.5h79.1c1.9 0 3.5-1.6 3.5-3.5s-1.5-3.5-3.5-3.5H47.7c-1.9 0-3.5 1.6-3.5 3.5z" fill="#0f0f72" data-color="1"></path>
    </g>
</svg>',
                'background_color' => 'bg-secondary-color',
                'font_color' => 'text-white',
                'title' => 'Desarrollo Web',
                'copy' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aliquam aperiam atque blanditiis culpa dignissimos dolor eveniet fuga libero nostrum.',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home-services');
    }
}
