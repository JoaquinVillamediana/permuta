<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>HI</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->

<div id="info">
    <h3 class="sub">PermutasOnline.com</h3>
    <h1 class="title">Seleccione una </br> clasificación y </br> registre su </br> permuta.</h1>
</div>
<!--  -->
<section class='tl'>  
    <article>
      <figure>
        <h2>INMUEBLES</h2>
        <a href=""><p>Ver productos</p></a>  
      </figure>
      <img alt src='imgs/1.png' />
    </article>
    <article>
      <figure>
        <h2>VEHICULOS</h2>
      <p>Ver productos</p>
      </figure>
      <img alt src='imgs/2.png' />
    </article>
    <article>
      <figure>
        <h2>MAQUINARIAS</h2>
      <p>Ver productos</p>
      </figure>
      <img alt src='imgs/6.png' />
    </article>
    <article>
      <figure>
        <h2>ELECTRONICA</h2>
        <p>Ver productos</p>
      </figure>
      <img alt src='imgs/3.png' />
    </article>
    <article>
      <figure>
        <h2>COLECCIÓN Y ANTIGUEDADES</h2>
        <p>Ver productos</p>
      </figure> 
      <img alt src='imgs/4.png' />
    </article>
    <article>
    <figure>
      <h2>@ecbos_</h2>
      <p>Code is poetry</p>
      <img alt src='https://pbs.twimg.com/profile_images/752843123131191299/DDFJFFbm.jpg' />
    </figure>
  </article>
    <article>
    <figure>
      <h2>MONEDAS, TITULOS Y VALORES</h2>
      <p>Ver productos</p>
      <img alt src='imgs/5.png' />
    </figure>
  </article>
</section>
<br /><br /><br />

<script>
            //<![CDATA[
            /*
Ültimos posts
*/
            function lastPosts(r){
              var num_Posts=6;
              var random_Posts=false;
              var ver_Sumario=false;
              var long_Sumario=0;
              var ver_Imagen=true;
              var size_Imagen="/s450/";
              var sin_Imagen="https://1.bp.blogspot.com/-dJaOneI-NRA/WOljn3K0VII/AAAAAAAANes/7DPsyqxvnPosIv2oBOLChyTTct8p67KHQCLcB/s400/escss.png";
              var src_1=/\/s\d*\//;
              var src_2=/\/s\d*-c\//;
              var widgetElement=document.querySelector(".last-posts");
              var salida="";
              var t=r.feed.openSearch$totalResults.$t;
              var f=new Array();
              for(var h=0;h<t;++h){f[h]=h}
              if(random_Posts==true){f.sort(function(){return 0.5-Math.random()})}
              if(num_Posts>t){num_Posts=t}
              for(h=0;h<num_Posts;++h){
                var l=r.feed.entry[f[h]];
                var e=l.title.$t;
                for(var g=0;g<l.link.length;g++){
                  if(l.link[g].rel=="alternate"){
                    posturl_Escss=l.link[g].href;break}
                }
                if("content" in l){var p=l.content.$t}
                s=p;
                a=s.indexOf("<img");
                b=s.indexOf('src="',a);
                c=s.indexOf('"',b+5);
                d=s.substr(b+5,c-b-5);
                if((a!=-1)&&(b!=-1)&&(c!=-1)&&(d!="")){
                  var n=d.match(src_1)||d.match(src_2);
                  var o=d.replace(n,size_Imagen);
                  var m=o.replace("http:","https:")
                  }
                else{var m=sin_Imagen}
                salida+='<article><figure><h2><a href="'+posturl_Escss.replace("http://","https://")+'">'+e+'</a></h2>';
                var q=/<\S[^>]*>/g;
                p=p.replace(q,"");
                if(ver_Sumario==true){
                  if(p.length<long_Sumario){document.write(p)}
                  else{p=p.substring(0,long_Sumario);
                       var j=p.lastIndexOf(" ");
                       p=p.substring(0,j);
                       salida+=p+"&hellip;</figure>";
                      }
                }
                
    if(ver_Imagen==true){salida+='</figure><img src="'+m+'" alt="'+e+'"/>'}
    salida+='</article>';
  }
              
   widgetElement.innerHTML=salida+'<article><figure><h2><a href="https://escss.blogspot.com/p/sitemap.html">Ver Todos los Artículos de EsCss</a></figure><img alt src="https://pbs.twimg.com/profile_images/722022140455821313/hrRtW6LJ.jpg"/></article>';
};    
            //]]>
          </script>
<script src="https://escss.blogspot.com/feeds/posts/default?start-index=1&amp;max-results=20&amp;alt=json-in-script&amp;callback=lastPosts"></script>

<svg width="0" height="0">
  <defs>
    <clipPath id="hexa-v" clipPathUnits="objectBoundingBox">
      <polygon points=".5 0, 1 .25, 1 .75, .5 1, 0 .75, 0 .25" />
    </clipPath>
    <clipPath id="hexa-h" clipPathUnits="objectBoundingBox">
      <polygon points=".25 0, .75 0, 1 .5, .75 1, .25 1, 0 .5" />
    </clipPath>
  </defs> 
    <symbol id='svg-blogger' viewBox='0 0 16 16'>
    <path d='M14.65 16H1.35C.6 16 0 15.4 0 14.65V1.35C0 .6.6 0 1.35 0H14.7c.7 0 1.3.6 1.3 1.35v13.3c0 .75-.6 1.35-1.35 1.35zM8 2.65H6c-1.85 0-3.35 1.5-3.35 3.35v4c0 1.85 1.5 3.35 3.35 3.35h4c1.85 0 3.35-1.5 3.35-3.35V7.35c0-.4-.3-.7-.7-.7H12c-.35 0-.65-.3-.65-.65 0-1.85-1.5-3.35-3.35-3.35zm2.05 8H6c-.35 0-.65-.3-.65-.65 0-.35.3-.65.65-.65h4.05c.35 0 .65.3.65.65 0 .35-.3.65-.65.65zm-1.7-5.3c.35 0 .65.3.65.65 0 .35-.3.65-.65.65h-2.4c-.35 0-.65-.3-.65-.65 0-.35.3-.65.65-.65h2.4z'/>
      </symbol>
    <symbol id='svg-codepen' viewBox='0 0 512 512'>
        <polygon points='164 240.6 164 271.1 186.2 255.5 '/>
        <polygon points='300.4 241.8 336.2 217.7 266.6 169.3 266.8 217.4 '/>
        <polygon points='242 216.3 242 169.3 173.3 217.4 207.7 240.4 '/>
        <path d='m374 0h-236c-76.2 0-138 61.8-138 138v236c0 76.2 61.8 138 138 138h236c76.2 0 138-61.8 138-138v-236c0-76.2-61.8-138-138-138zm-3 291.5c0 6.2-3.3 12.1-8.5 15.5l-97.1 64.1c-6.2 4.1-14.3 4.1-20.5 0l-95.3-62.9c-5.2-3.4-8.5-9.3-8.5-15.5v-70.2c0-6.1 3.2-11.8 8.2-15.3l93.6-65.2c6.3-4.4 14.7-4.5 21-0.3l98.7 65.3c5.2 3.4 8.5 9.3 8.5 15.5v69z'/>
        <polygon points='267 293.4 267 340.9 336.1 294.7 300.3 271.2 '/>
        <polygon points='243 293.5 208.2 270.2 173.6 294.4 243 340.8 '/>
        <polygon points='346 271.9 346 240.6 322.4 256.4 '/>
        <polygon points='252.1 239.4 229.6 255.1 255.1 272.2 278.3 256.6 '/>
      </symbol>
    <symbol id='svg-face' viewBox='0 0 455 455'>
        <path d='M0 0v455h455V0H0zM301 125.2H265.4c-7 0-14.2 7.3-14.2 12.7v36.3h49.6c-2 27.8-6.1 53.2-6.1 53.2h-43.8V385h-65.3V227.4h-31.8v-53h31.8v-43.4c0-7.9-1.6-61 66.9-61h48.4V125.2z'/>
      </symbol>
      <!-- <img id='svg-face' viewBox='0 0 455 455' src="https://image.flaticon.com/icons/png/512/1809/1809770.png" alt=""> -->
    <symbol id='svg-gplus' viewBox='0 0 455 455'>
        <path d='M0 0v455h455V0H0zM161.7 342.7C97.5 342.7 46.5 291.7 46.5 227.5s51-115.2 115.2-115.2c31.3 0 57.6 11.5 77.3 31.3L207.8 173.2c-8.2-8.2-23-18.1-46.1-18.1 -39.5 0-70.8 32.9-70.8 72.4s31.3 72.4 70.8 72.4c46.1 0 62.5-32.9 65.8-49.4h-65.8v-39.5h108.6c1.6 6.6 1.6 11.5 1.6 19.7C271.9 296.6 227.5 342.7 161.7 342.7zM408.5 244h-32.9v32.9h-32.9v-32.9h-32.9v-32.9h32.9v-32.9h32.9v32.9H408.5V244z'/>
      </symbol>
    <symbol id='svg-twitter' viewBox='0 0 455 455'>
        <path d='M0 0v455h455V0H0zM352.8 163.3c0.1 2.8 0.2 5.6 0.2 8.4 0 85.4-65 183.9-183.9 183.9 -36.5 0-70.5-10.7-99.1-29 5.1 0.6 10.2 0.9 15.4 0.9 30.3 0 58.1-10.3 80.3-27.7 -28.3-0.5-52.1-19.2-60.4-44.9 3.9 0.8 8 1.2 12.2 1.2 5.9 0 11.6-0.8 17-2.3 -29.6-5.9-51.8-32.1-51.8-63.4 0-0.3 0-0.5 0-0.8 8.7 4.8 18.7 7.7 29.3 8.1 -17.3-11.6-28.7-31.4-28.7-53.8 0-11.8 3.2-22.9 8.8-32.5 31.9 39.1 79.5 64.8 133.2 67.5 -1.1-4.7-1.7-9.7-1.7-14.7 0-35.7 28.9-64.6 64.6-64.6 18.6 0 35.4 7.8 47.2 20.4 14.7-2.9 28.6-8.3 41-15.7 -4.8 15.1-15.1 27.8-28.4 35.8 13.1-1.6 25.5-5 37.1-10.2C376.3 142.8 365.4 154.1 352.8 163.3z'/>
      </symbol>
    <symbol id='svg-whatsa' viewBox="0 0 16 16">
        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/> 
    </symbol>
    <symbol id='svg-wp' viewBox="0 0 16 16">
      <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
    </symbol>
</svg>
<!--  -->

<!--  -->
<style>
    *, *:after, *:before {
  box-sizing: inherit;
}
* {margin:0;padding:0;border: 0 none; position: relative;}
:root {
  --sinSerif: -apple-system, BlinkMacSystemFont, "Segoe UI", "Roboto", "Oxygen", "Ubuntu", "Cantarell", "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif;
  /* hexagon */
    --gap: 2vmin;
    --radio: calc(100vmin / 3);
    --width: calc(var(--radio) * .866);
    --height: var(--radio);
  /* colors */
    --negroO: #1d1f20;
    --negroM: #292f33;
    --negroC: #444448;
    --gris: #999;
    --blancoS: #e1e8ed;
}
html {
  box-sizing: border-box;
  font-family: var(--sinSerif);
  font-size: 1rem;
  color: var(--gris)
}
.title{
background-color: red;
color: white;
font-size: 40px;
}
.sub{
    background-color: red;
color: white;
text-align: center;

}
body {
  /* background: var(--negroO); */
  overflow-x: scroll;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-content: center;
  color: var(--gris);
}
/* Making the grid */
section {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-gap: 2vmin;
  max-width: 100vmin;
  padding-left: 2vmin;
  /* margin: .5rem auto; */
  margin: 4%;
margin-top: -40%;
  margin-left: 40%;
}
#info{
    width: 20%;
    margin-top: 25%;
    margin-left: 10%;
}
article {
  background: var(--negroC);
  width: var(--width); 
  height: var(--height);
  overflow: hidden;
  transition: 1s;
  clip-path: url(#hexa-v);
  clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%);
  filter: drop-shadow(0 0 1px #fff);
}
/* making the honeycomb */
article:nth-of-type(1) {  
  grid-column: 2 / span 2;
  grid-row: 1;  
}
article:nth-of-type(2) {  
  grid-column: 4 / span 2;
  grid-row: 1;  
}
article:nth-of-type(3) {  
  grid-column: 1 / span 2;
  grid-row: 2;  
}
article:nth-of-type(4) {  
  grid-column: 3 / span 2;
  grid-row: 2;  
}
article:nth-of-type(5) {  
  grid-column: 5 / span 2;
  grid-row: 2;  
}
article:nth-of-type(6) {  
  grid-column: 2 / span 2;
  grid-row: 3;  
}
article:nth-of-type(7) {  
  grid-column: 4 / span 2;
  grid-row: 3;  
}

/* A small adjustment in the vertical */
article:nth-of-type(-n+2) {
  margin-bottom: calc(var(--height) * -.2);
}
article:nth-of-type(n+6):nth-of-type(-n+7) {
  margin-top: calc(var(--height) * -.2);
}

/* Ornamentales */
header {
  background: var(--negroM);
  font-size: calc(1rem + 2vmin);
  font-variant: small-caps;
}
h1 {
  font-size: inherit;
  font-weight: 100;
  letter-spacing: 3px;
  line-height: 1.5;
  text-align: center;
  box-shadow: inset 0 0 1px 1px var(--negroC);
}
figure {
  display: flex;
  flex-direction: column;
  flex-wrap: nowrap;
  justify-content: center;
  height: 100%;
  font-size: calc(1rem + 1vmin);
  line-height: 1.2;
  transition: .75s .05s;
  hyphens: auto;
  text-align: center;
}
img,
[class*='svg-icon'] {
  background: #fff;
  min-width: var(--radio);
  min-height: var(--radio);
  max-widt: var(--width);
  max-height: var(--height);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-origin: 50% 0%;
  transition: 1s;
  clip-path: url(#hexagono);
  clip-path: inherit;
  z-index:  10;
}
article:hover img,
article:hover [class*='svg-icon'] {
  transform: translate(-50%, -50%) rotateY(.25turn);
}
h2 {
  font-size: 100%;
  font-weight: 200;
  font-variant: small-caps;
  padding: 0 2vw;
}
figure p {
  font-size: 70%;
  line-height: 1.2;
  font-weight: 100;
  width: 100%;
}
a {
  display: block;
  color: var(--gris);
  text-decoration: none;
}
a:hover {
  color: var(--blancoS);
}
.rss figure {
  background: #fff;
}
svg {
    clip-rule: evenodd;
    fill-rule: evenodd;
    clip-rule: evenodd;
    image-rendering: optimizequality;
    shape-rendering: geometricprecision;
    text-rendering: geometricprecision;
}
[class*='-codepen'] {
  fill: #000;
}
[class*='-blogger'] {
  fill: #F38936;
}
[class*='-face'] {
  fill: #3B5998;
}
[class*='-gplus'] {
  fill: #DC4E41;
}
[class*='-twitter'] {
  fill: #1DA1F2;
}
[class*='-whatsa'] {
  fill: #25D366;
}
[class*='-wp'] {
  fill: #21759B;
}
@media only screen and (max-width: 450px) {
  figure p {display: none;}
  figure h2 {font-size: 1rem;}
}
</style>
<!--  -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>