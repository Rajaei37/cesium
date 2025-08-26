import{S as l,r as k,o as z,p as M,a as v,b as g,e as o,d as t,w as a,u as p,g as s,n as d,f as x,T as _}from"./app-RyOS3fFM.js";import{_ as H}from"./_plugin-vue_export-helper-DlAUqK2U.js";const V={class:"max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between w-full"},L={class:"flex-shrink-0 group"},S={class:"hidden md:flex items-center space-x-8"},N={class:"hidden md:flex items-center space-x-4"},j={class:"flex items-center space-x-3 ml-4"},P={class:"flex items-center space-x-4"},E={class:"relative w-6 h-6"},I={key:0,class:"absolute top-full left-0 right-0 bg-primary/95 backdrop-blur-lg shadow-2xl border-t border-secondary/20 md:hidden z-40"},T={class:"px-4 py-6 space-y-4 w-full"},A={class:"pt-4 border-t border-white/10 space-y-3"},B={class:"pt-4 border-t border-white/10"},O={class:"flex items-center justify-center space-x-6"},u={props:["href","active"],emits:["mouseenter"],template:`
    <Link 
      :href="href"
      @mouseenter="$emit('mouseenter')"
      class="relative text-white hover:text-secondary transition-all duration-300 font-medium group py-2 px-1"
      :class="{ 'text-secondary': active }"
    >
      <slot></slot>
      <!-- Enhanced Underline Animation -->
      <span 
        class="absolute bottom-0 left-0 h-0.5 bg-gradient-to-r from-secondary to-secondary-light transition-all duration-500 ease-out"
        :class="active ? 'w-full shadow-lg shadow-secondary/50' : 'w-0 group-hover:w-full'"
      ></span>
      <!-- Hover Glow Effect -->
      <div class="absolute inset-0 bg-secondary/10 rounded-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></div>
    </Link>
  `,components:{Link:l}},m={props:["href"],emits:["click"],template:`
    <Link 
      :href="href"
      @click="$emit('click')"
      class="group block text-white hover:text-secondary transition-all duration-300 font-medium text-lg py-3 px-4 rounded-lg hover:bg-white/5 relative overflow-hidden"
    >
      <span class="relative z-10">
        <slot></slot>
      </span>
      <!-- Mobile link animation -->
      <div class="absolute inset-0 bg-gradient-to-r from-secondary/0 to-secondary/10 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
    </Link>
  `,components:{Link:l}},n={props:["href","platform","icon","image","size"],template:`
    <a 
      :href="href" 
      target="_blank" 
      class="group relative text-white hover:text-secondary transition-all duration-300 p-2 rounded-lg hover:bg-white/10 hover:shadow-lg hover:shadow-secondary/20 transform hover:scale-110"
      :class="size === 'large' ? 'p-3' : 'p-2'"
    >
      <!-- SVG Icon -->
      <svg 
        v-if="icon"
        :class="size === 'large' ? 'w-6 h-6' : 'w-5 h-5'"
        viewBox="0 0 24 24" 
        fill="currentColor" 
        xmlns="http://www.w3.org/2000/svg"
        v-html="icon"
      ></svg>
      
      <!-- Image Icon -->
      <img 
        v-else-if="image"
        :src="image" 
        :alt="platform" 
        :class="[
          size === 'large' ? 'h-6 w-6' : 'h-5 w-5',
          'object-contain transition-all duration-300',
          platform === 'instagram' ? 'filter brightness-0 invert group-hover:brightness-100 group-hover:invert-0' : ''
        ]"
      />
      
      <!-- Hover Glow Effect -->
      <div class="absolute inset-0 bg-secondary/20 rounded-lg blur-md opacity-0 group-hover:opacity-100 transition-opacity duration-300 -z-10"></div>
    </a>
  `},Z={components:{NavLink:u,MobileNavLink:m,SocialIcon:n}},G=Object.assign(Z,{__name:"AppHeader",props:{currentPage:{type:String,default:"home"}},setup(c){const r=k(!1),h=k(!1),y='<path d="M20.4491 20.4508H16.8933V14.8808C16.8933 13.5525 16.8708 11.8441 15.0408 11.8441C13.1858 11.8441 12.9083 13.2908 12.9083 14.7841V20.4508H9.35247V8.99748H12.7658V10.5608H12.8158C13.2908 9.66081 14.4491 8.71414 16.1808 8.71414C19.7858 8.71414 20.4508 11.0825 20.4508 14.1658V20.4508H20.4491ZM5.33914 7.43248C4.19581 7.43248 3.27081 6.50581 3.27081 5.36414C3.27081 4.22248 4.19581 3.29581 5.33914 3.29581C6.47914 3.29581 7.40747 4.22248 7.40747 5.36414C7.40747 6.50581 6.47914 7.43248 5.33914 7.43248ZM7.11914 20.4508H3.55581V8.99748H7.11914V20.4508ZM22.2241 0H1.77081C0.792477 0 0 0.774143 0 1.72914V22.2708C0 23.2258 0.792477 24 1.77081 24H22.2241C23.2041 24 24 23.2258 24 22.2708V1.72914C24 0.774143 23.2041 0 22.2241 0Z"/>',f=()=>{},C=()=>{r.value=!r.value,r.value?document.body.style.overflow="hidden":document.body.style.overflow=""},i=()=>{r.value=!1,document.body.style.overflow=""},b=()=>{const w=window.scrollY;h.value=w>50};return z(()=>{window.addEventListener("scroll",b,{passive:!0})}),M(()=>{window.removeEventListener("scroll",b),document.body.style.overflow=""}),(w,e)=>(g(),v("nav",{class:d(["fixed top-0 left-0 right-0 z-50 transition-all duration-500 w-full max-w-full overflow-x-hidden backdrop-blur-md",h.value?"bg-primary/95 shadow-2xl py-2 border-b border-secondary/20":"bg-gradient-to-b from-primary/90 via-primary/70 to-transparent py-4"])},[o("div",V,[o("div",L,[t(p(l),{href:"/",class:"block"},{default:a(()=>e[0]||(e[0]=[o("img",{src:"/assets/logos/Asset31.svg",alt:"Cesium Marketing Logo",class:"h-10 transition-all duration-500 group-hover:scale-110 group-hover:drop-shadow-lg filter group-hover:brightness-110"},null,-1),o("div",{class:"absolute inset-0 bg-secondary/20 rounded-lg blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"},null,-1)])),_:1,__:[0]})]),o("div",S,[t(u,{href:"/",active:c.currentPage==="home",onMouseenter:f},{default:a(()=>e[1]||(e[1]=[s(" Home ")])),_:1,__:[1]},8,["active"]),t(u,{href:"/services",active:c.currentPage==="services",onMouseenter:f},{default:a(()=>e[2]||(e[2]=[s(" Services ")])),_:1,__:[2]},8,["active"]),t(u,{href:"/our-process",active:c.currentPage==="our-process",onMouseenter:f},{default:a(()=>e[3]||(e[3]=[s(" Our process ")])),_:1,__:[3]},8,["active"]),t(u,{href:"/blog",active:c.currentPage==="blog",onMouseenter:f},{default:a(()=>e[4]||(e[4]=[s(" News ")])),_:1,__:[4]},8,["active"]),t(u,{href:"/contact-us",active:c.currentPage==="contact",onMouseenter:f},{default:a(()=>e[5]||(e[5]=[s(" Contact ")])),_:1,__:[5]},8,["active"])]),o("div",N,[t(p(l),{href:"/join-our-team",class:d(["group relative text-white hover:text-secondary transition-all duration-300 font-medium px-6 py-2 border border-white/30 hover:border-secondary/70 rounded-lg backdrop-blur-sm hover:backdrop-blur-md overflow-hidden",{"text-secondary border-secondary":c.currentPage==="join-team"}])},{default:a(()=>e[6]||(e[6]=[o("span",{class:"relative z-10"},"Join our Team",-1),o("div",{class:"absolute inset-0 bg-gradient-to-r from-secondary/0 to-secondary/20 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"},null,-1)])),_:1,__:[6]},8,["class"]),t(p(l),{href:"/contact-us",class:"group relative bg-gradient-to-r from-secondary via-secondary-light to-secondary text-primary font-semibold px-6 py-2 rounded-lg shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:scale-105 hover:-translate-y-0.5 overflow-hidden"},{default:a(()=>e[7]||(e[7]=[o("span",{class:"relative z-10"},"contact us",-1),o("div",{class:"absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent transform -skew-x-12 -translate-x-full group-hover:translate-x-full transition-transform duration-1000"},null,-1),o("div",{class:"absolute inset-0 bg-secondary/50 rounded-lg blur-lg opacity-0 group-hover:opacity-100 transition-opacity duration-500 -z-10"},null,-1)])),_:1,__:[7]}),o("div",j,[t(n,{href:"https://www.linkedin.com/company/cesium-agency/",platform:"linkedin",icon:y}),t(n,{href:"https://www.tiktok.com/@cesiumagency",platform:"tiktok",image:"/assets/social-icons/tiktok.svg"}),t(n,{href:"https://www.instagram.com/cesiumagency/",platform:"instagram",image:"/assets/social-icons/instagram.svg"}),t(n,{href:"https://www.facebook.com/cesiumagency/",platform:"facebook",image:"/assets/social-icons/facebook.svg"})])]),o("div",P,[o("button",{onClick:C,class:d(["md:hidden relative group p-2 text-white hover:text-secondary transition-all duration-300 rounded-lg hover:bg-white/10",{"text-secondary":r.value}])},[o("div",E,[o("span",{class:d(["absolute block w-6 h-0.5 bg-current transform transition-all duration-300",r.value?"rotate-45 translate-y-2.5":"translate-y-0"])},null,2),o("span",{class:d(["absolute block w-6 h-0.5 bg-current transform transition-all duration-300 translate-y-2",r.value?"opacity-0":"opacity-100"])},null,2),o("span",{class:d(["absolute block w-6 h-0.5 bg-current transform transition-all duration-300",r.value?"-rotate-45 translate-y-2.5":"translate-y-4"])},null,2)])],2)])]),t(_,{"enter-active-class":"transition-all duration-300 ease-out","enter-from-class":"opacity-0 transform -translate-y-4","enter-to-class":"opacity-100 transform translate-y-0","leave-active-class":"transition-all duration-200 ease-in","leave-from-class":"opacity-100 transform translate-y-0","leave-to-class":"opacity-0 transform -translate-y-4"},{default:a(()=>[r.value?(g(),v("div",I,[o("div",T,[t(m,{href:"/",onClick:i},{default:a(()=>e[8]||(e[8]=[s("Home")])),_:1,__:[8]}),t(m,{href:"/services",onClick:i},{default:a(()=>e[9]||(e[9]=[s("Services")])),_:1,__:[9]}),t(m,{href:"/our-process",onClick:i},{default:a(()=>e[10]||(e[10]=[s("Our process")])),_:1,__:[10]}),t(m,{href:"/blog",onClick:i},{default:a(()=>e[11]||(e[11]=[s("News")])),_:1,__:[11]}),t(m,{href:"/contact-us",onClick:i},{default:a(()=>e[12]||(e[12]=[s("Contact")])),_:1,__:[12]}),o("div",A,[t(p(l),{href:"/join-our-team",onClick:i,class:"block w-full text-center text-white hover:text-secondary transition-colors duration-300 font-medium py-3 border border-white/30 hover:border-secondary/70 rounded-lg backdrop-blur-sm"},{default:a(()=>e[13]||(e[13]=[s(" Join our Team ")])),_:1,__:[13]}),t(p(l),{href:"/contact-us",onClick:i,class:"block w-full bg-gradient-to-r from-secondary via-secondary-light to-secondary text-primary font-semibold py-3 text-center rounded-lg shadow-lg transition-all duration-300 transform hover:scale-105"},{default:a(()=>e[14]||(e[14]=[s(" contact us ")])),_:1,__:[14]})]),o("div",B,[e[15]||(e[15]=o("p",{class:"text-white/70 text-sm mb-3 text-center"},"Follow us:",-1)),o("div",O,[t(n,{href:"https://www.linkedin.com/company/cesium-agency/",platform:"linkedin",icon:y,size:"large"}),t(n,{href:"https://www.tiktok.com/@cesiumagency",platform:"tiktok",image:"/assets/social-icons/tiktok.svg",size:"large"}),t(n,{href:"https://www.instagram.com/cesiumagency/",platform:"instagram",image:"/assets/social-icons/instagram.svg",size:"large"}),t(n,{href:"https://www.facebook.com/cesiumagency/",platform:"facebook",image:"/assets/social-icons/facebook.svg",size:"large"})])])])])):x("",!0)]),_:1}),t(_,{"enter-active-class":"transition-opacity duration-300","enter-from-class":"opacity-0","enter-to-class":"opacity-100","leave-active-class":"transition-opacity duration-200","leave-from-class":"opacity-100","leave-to-class":"opacity-0"},{default:a(()=>[r.value?(g(),v("div",{key:0,class:"fixed inset-0 bg-black/50 backdrop-blur-sm z-30 md:hidden",onClick:i})):x("",!0)]),_:1})],2))}}),$=H(G,[["__scopeId","data-v-569143fc"]]);export{$ as A};
