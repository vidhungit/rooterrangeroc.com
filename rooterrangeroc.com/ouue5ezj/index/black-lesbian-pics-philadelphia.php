<!DOCTYPE html>
<html class="with-system-header" lang="en">
<head prefix="og: #">

  <meta charset="utf-8">


  <title></title>
 
  <style>
@keyframes blinking-dot{0%{opacity:1}25%{opacity:0.4}75%{opacity:0.4}100%{opacity:1}}@keyframes gl-spinner-rotate{0%{transform:rotate(0)}100%{transform:rotate(360deg)}}{--gl-theme-accent: #6666c4} .navbar-gitlab{background-color:#292961} .navbar-gitlab .navbar-collapse{color:#d1d1f0} .navbar-gitlab .container-fluid .navbar-toggler{border-left:1px solid #6868b9;color:#d1d1f0} .navbar-gitlab .navbar-sub-nav>li>a:hover, .navbar-gitlab .navbar-sub-nav>li>a:focus, .navbar-gitlab .navbar-sub-nav>li>button:hover, .navbar-gitlab .navbar-sub-nav>li>button:focus, .navbar-gitlab .navbar-nav>li>a:hover, .navbar-gitlab .navbar-nav>li>a:focus, .navbar-gitlab .navbar-nav>li>button:hover, .navbar-gitlab .navbar-nav>li>button:focus{background-color:rgba(209,209,240,0.2)} .navbar-gitlab .navbar-sub-nav>>a, .navbar-gitlab .navbar-sub-nav>>button, .navbar-gitlab .navbar-sub-nav>>a, .navbar-gitlab .navbar-sub-nav>>button, .navbar-gitlab .navbar-nav>>a, .navbar-gitlab .navbar-nav>>button, .navbar-gitlab .navbar-nav>>a, .navbar-gitlab .navbar-nav>>button{color:#292961;background-color:#fff} .navbar-gitlab .navbar-sub-nav>, .navbar-gitlab .navbar-nav>{border-left:1px solid rgba(209,209,240,0.2)} .navbar-gitlab .navbar-sub-nav{color:#d1d1f0} .navbar-gitlab .nav>li{color:#d1d1f0} .navbar-gitlab .nav>{color:#333238} .navbar-gitlab .nav>li>a .notification-dot{border:2px solid #292961} .navbar-gitlab .nav>li> .notification-dot{background-color:#d1d1f0} .navbar-gitlab .nav>li> .header-user-avatar{border-color:#d1d1f0}@media (min-width: 576px){ .navbar-gitlab .nav>li>a:hover, .navbar-gitlab .nav>li>a:focus{background-color:rgba(209,209,240,0.2)}} .navbar-gitlab .nav>li>a:hover svg, .navbar-gitlab .nav>li>a:focus svg{fill:currentColor} .navbar-gitlab .nav>li>a:hover .notification-dot, .navbar-gitlab .nav>li>a:focus .notification-dot{will-change:border-color, background-color;border-color:#4a4a82} .navbar-gitlab .nav>li>:hover .notification-dot, .navbar-gitlab .nav>li>:focus .notification-dot{background-color:#fff} .navbar-gitlab .nav>>a, .navbar-gitlab .nav>>a{color:#292961;background-color:#fff} .navbar-gitlab .nav>>a:hover svg, .navbar-gitlab .nav>>a:hover svg{fill:#292961} .navbar-gitlab .nav>>a .notification-dot, .navbar-gitlab .nav>>a .notification-dot{border-color:#fff} .navbar-gitlab .nav>> .notification-dot, .navbar-gitlab .nav>> .notification-dot{background-color:#292961} .navbar-gitlab .nav>li .impersonated-user svg, .navbar-gitlab .nav>li .impersonated-user:hover svg{fill:#292961} .navbar .title>a:hover, .navbar .title>a:focus{background-color:rgba(209,209,240,0.2)} .header-search{background-color:rgba(209,209,240,0.2) !important;border-radius:4px} .header-search:hover{background-color:rgba(209,209,240,0.3) !important} . input{background-color:#fff;color:#333238 !important;box-shadow:inset 0 0 0 1px #333238} . input:focus{box-shadow:inset 0 0 0 1px #333238, 0 0 0 1px #fff, 0 0 0 3px #428fdc} . input::placeholder{color:#89888d} .header-search {color:rgba(209,209,240,0.8)} .header-search input{background-color:transparent;color:rgba(209,209,240,0.8);box-shadow:inset 0 0 0 1px rgba(209,209,240,0.4)} .header-search input::placeholder{color:rgba(209,209,240,0.8)} .header-search input:focus::placeholder, .header-search input:active::placeholder{color:#89888d} .header-search .keyboard-shortcut-helper{color:#d1d1f0;background-color:rgba(209,209,240,0.2)} .search form{background-color:rgba(209,209,240,0.2)} .search form:hover{background-color:rgba(209,209,240,0.3)} .search .search-input::placeholder{color:rgba(209,209,240,0.8)} .search .search-input-wrap .search-icon, .search .search-input-wrap .clear-icon{fill:rgba(209,209,240,0.8)} . form{background-color:#fff} . .search-input-wrap .search-icon{fill:rgba(209,209,240,0.8)} .search-sidebar ., .search-sidebar .nav-link:hover{background-color:rgba(236,236,239,0.8);color:#333238} .nav-sidebar >a{color:#333238} .nav-sidebar .fly-out-top-item a, .nav-sidebar .fly-out-top-item a:hover, .nav-sidebar . a, .nav-sidebar .fly-out-top-item .fly-out-top-item-container{background-color:var(--gray-100, #ececef);color:var(--gray-900, #333238)} .branch-header-title{color:#4b4ba3} .{color:#4b4ba3} .{box-shadow:inset -3px 0 #4b4ba3}

*,*::before,*::after{box-sizing:border-box}html{font-family:sans-serif;line-height:}aside,header{display:block}body{margin:0;font-family:var(--default-regular-font, -apple-system),BlinkMacSystemFont,"Segoe UI",Roboto,"Noto Sans",Ubuntu,Cantarell,"Helvetica Neue",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:1rem;font-weight:400;line-height:1.5;color:#333238;text-align:left;background-color:#fff}ul{margin-top:0;margin-bottom:1rem}ul ul{margin-bottom:0}strong{font-weight:bolder}a{color:#1f75cb;text-decoration:none;background-color:transparent}a:not([href]):not([class]){color:inherit;text-decoration:none}kbd{font-family:var(--default-mono-font, "Menlo"),"DejaVu Sans Mono","Liberation Mono","Consolas","Ubuntu Mono","Courier New","andale mono","lucida console",monospace;font-size:1em}img{vertical-align:middle;border-style:none}svg{overflow:hidden;vertical-align:middle}button{border-radius:0}input,button{margin:0;font-family:inherit;font-size:inherit;line-height:inherit}button,input{overflow:visible}button{text-transform:none}[role="button"]{cursor:pointer}button:not(:disabled),[type="button"]:not(:disabled){cursor:pointer}button::-moz-focus-inner,[type="button"]::-moz-focus-inner{padding:0;border-style:none}[type="search"]{outline-offset:-2px}.list-unstyled{padding-left:0;list-style:none}kbd{padding: ;font-size:90%;color:#fff;background-color:#333238;border-radius:}kbd kbd{padding:0;font-size:100%;font-weight:600}.container-fluid{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.form-control{display:block;width:100%;height:32px;padding: ;font-size:;font-weight:400;line-height:1.5;color:#333238;background-color:#fff;background-clip:padding-box;border:1px solid #89888d;border-radius:}.form-control::placeholder{color:#626168;opacity:1}.form-control:disabled{background-color:#fbfafd;opacity:1}.btn{display:inline-block;font-weight:400;color:#333238;text-align:center;vertical-align:middle;-webkit-user-select:none;user-select:none;background-color:transparent;border:1px solid transparent;padding: ;font-size:1rem;line-height:20px;border-radius:}.btn:disabled{opacity:}.btn:not(:disabled):not(.disabled){cursor:pointer}.collapse:not(.show){display:none}.dropdown{position:relative}.dropdown-menu{position:absolute;top:100%;left:0;z-index:1000;display:none;float:left;min-width:10rem;padding: 0;margin: 0 0;font-size:1rem;color:#333238;text-align:left;list-style:none;background-color:#fff;background-clip:padding-box;border:1px solid rgba(0,0,0,);border-radius:}.nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}.navbar{position:relative;display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between;padding: }.navbar .container-fluid{display:flex;flex-wrap:wrap;align-items:center;justify-content:space-between}.navbar-nav{display:flex;flex-direction:column;padding-left:0;margin-bottom:0;list-style:none}.navbar-nav .dropdown-menu{position:static;float:none}.navbar-collapse{flex-basis:100%;flex-grow:1;align-items:center}.navbar-toggler{padding: ;font-size:;line-height:1;background-color:transparent;border:1px solid transparent;border-radius:}@media (max-width: ){.navbar-expand-sm>.container-fluid{padding-right:0;padding-left:0}}@media (min-width: 576px){.navbar-expand-sm{flex-flow:row nowrap;justify-content:flex-start}.navbar-expand-sm .navbar-nav{flex-direction:row}.navbar-expand-sm .navbar-nav .dropdown-menu{position:absolute}.navbar-expand-sm>.container-fluid{flex-wrap:nowrap}.navbar-expand-sm .navbar-collapse{display:flex !important;flex-basis:auto}.navbar-expand-sm .navbar-toggler{display:none}}.badge{display:inline-block;padding: ;font-size:75%;font-weight:600;line-height:1;text-align:center;white-space:nowrap;vertical-align:baseline;border-radius:}.badge:empty{display:none}.btn .badge{position:relative;top:-1px}.badge-pill{padding-right:;padding-left:;border-radius:10rem}.badge-success{color:#fff;background-color:#108548}.badge-info{color:#fff;background-color:#1f75cb}.badge-warning{color:#fff;background-color:#ab6100}.rounded-circle{border-radius:50% !important}.d-none{display:none !important}.d-block{display:block !important}@media (min-width: 576px){.d-sm-none{display:none !important}.d-sm-inline-block{display:inline-block !important}}@media (min-width: 768px){.d-md-block{display:block !important}}@media (min-width: 992px){.d-lg-none{display:none !important}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border:0}.gl-avatar{border-width:1px;border-style:solid;border-color:rgba(31,30,36,);overflow:hidden;flex-shrink:0}.gl-avatar-s24{width:;height:;font-size:;line-height:1rem;border-radius:}.gl-avatar-circle{border-radius:50%}.gl-badge{display:inline-flex;align-items:center;font-size:;font-weight:400;line-height:1rem;padding-top:;padding-bottom:;padding-left:;padding-right:}.{padding-top:0;padding-bottom:0}.{background-color:#cbe2f9;color:#0b5cad},:active{color:#033464;background-color:#9dc7f1}:active{box-shadow:0 0 0 1px #fff, 0 0 0 3px #428fdc;outline:none}.{background-color:#c3e6cd;color:#24663b},:active{color:#0a4020;background-color:#91d4a8}:active{box-shadow:0 0 0 1px #fff, 0 0 0 3px #428fdc;outline:none}.{background-color:#f5d9a8;color:#8f4700},:active{color:#5c2900;background-color:#e9be74}:active{box-shadow:0 0 0 1px #fff, 0 0 0 3px #428fdc;outline:none}.gl-button .gl-badge{top:0}.gl-form-input,.{background-color:#fff;font-family:var(--default-regular-font, -apple-system),BlinkMacSystemFont,"Segoe UI",Roboto,"Noto Sans",Ubuntu,Cantarell,"Helvetica Neue",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";font-size:;line-height:1rem;padding-top:;padding-bottom:;padding-left:;padding-right:;height:auto;color:#333238;box-shadow:inset 0 0 0 1px #89888d;border-style:none;-webkit-appearance:none;appearance:none;-moz-appearance:none}.gl-form-input:disabled,.gl-form-input:not(.form-control-plaintext):not([type="color"]):read-only,.:disabled,.:not(.form-control-plaintext):not([type="color"]):read-only{background-color:#fbfafd;box-shadow:inset 0 0 0 1px #dcdcde}.gl-form-input:disabled,.:disabled{cursor:not-allowed;color:#737278}.gl-form-input::placeholder,.::placeholder{color:#89888d}.gl-icon{fill:currentColor}.{width:12px;height:12px}.{width:16px;height:16px}.{width:32px;height:32px}.gl-link{font-size:;color:#1f75cb}.gl-link:active{color:#0b5cad}.gl-link:active{text-decoration:underline;outline:2px solid #428fdc;outline-offset:2px}.gl-button{display:inline-flex}.gl-button:not(.btn-link):active{text-decoration:none}.{border-width:0;padding-top:;padding-bottom:;padding-left:;padding-right:;background-color:transparent;line-height:1rem;color:#333238;fill:currentColor;box-shadow:inset 0 0 0 1px #bfbfc3;justify-content:center;align-items:center;font-size:;border-radius:}. .gl-button-text{overflow:hidden;text-overflow:ellipsis;white-space:nowrap;padding-top:1px;padding-bottom:1px;margin-top:-1px;margin-bottom:-1px}.{background-color:#fff}.:active,.{box-shadow:inset 0 0 0 1px #626168, 0 0 0 1px #fff, 0 0 0 3px #428fdc;outline:none;background-color:#dcdcde}.:active .gl-icon,. .gl-icon{color:#333238}. .gl-icon{color:#737278}.gl-search-box-by-type-search-icon{color:#737278;width:1rem;position:absolute;left:;top:calc(50% - 16px / 2)}.gl-search-box-by-type{display:flex;position:relative}.gl-search-box-by-type-input,.{height:2rem;padding-right:2rem;padding-left:}body{font-size:}button,html [type="button"],[role="button"]{cursor:pointer}strong{font-weight:bold}svg{vertical-align:baseline}.form-control{font-size:}.hidden{display:none !important;visibility:hidden !important}.badge:not(.gl-badge){padding:4px 5px;font-size:12px;font-style:normal;font-weight:400;display:inline-block}.divider{height:0;margin:4px 0;overflow:hidden;border-top:1px solid #dcdcde}.toggle-sidebar-button .collapse-text,.toggle-sidebar-button .icon-chevron-double-lg-left{color:#737278}html{overflow-y:scroll}.layout-page{padding-top:calc( var(--header-height, 48px) + calc(var(--system-header-height) + var(--performance-bar-height)) + var(--top-bar-height));padding-bottom:var(--system-footer-height)}@media (min-width: 576px){.logged-out-marketing-header{--header-height: 72px}}.btn{border-radius:4px;font-size:;font-weight:400;padding:6px 10px;background-color:#fff;border-color:#dcdcde;color:#333238;color:#333238;white-space:nowrap}.btn:active{background-color:#ececef;box-shadow:none}.btn:active,.{background-color:#e6e6ea;border-color:#dedee3;color:#333238}.btn svg{height:15px;width:15px}.btn svg:not(:last-child){margin-right:5px}.:not(.gl-badge){font-weight:400;background-color:rgba(0,0,0,);color:#535158;vertical-align:baseline}:root{--performance-bar-height: 0px;--system-header-height: 0px;--top-bar-height: 0px;--system-footer-height: 0px;--mr-review-bar-height: 0px}.with-top-bar{--top-bar-height: 48px}.gl-font-sm{font-size:12px}.dropdown{position:relative}.dropdown-menu{display:none;position:absolute;width:auto;top:100%;z-index:300;min-width:240px;max-width:500px;margin-top:4px;margin-bottom:24px;font-size:;font-weight:400;padding:8px 0;background-color:#fff;border:1px solid #dcdcde;border-radius:;box-shadow:0 2px 4px rgba(0,0,0,0.1)}.dropdown-menu ul{margin:0;padding:0}.dropdown-menu li{display:block;text-align:left;list-style:none}.dropdown-menu li>a,.dropdown-menu li>button{background:transparent;border:0;border-radius:0;box-shadow:none;display:block;font-weight:400;position:relative;padding:8px 12px;color:#333238;line-height:16px;white-space:normal;overflow:hidden;text-align:left;width:100%}.dropdown-menu li>a:active,.dropdown-menu li>button:active{background-color:#ececef;color:#333238;outline:0;text-decoration:none}.dropdown-menu li>a:active,.dropdown-menu li>button:active{box-shadow:inset 0 0 0 2px #428fdc, inset 0 0 0 3px #fff, inset 0 0 0 1px #fff;outline:none}.dropdown-menu .divider{height:1px;margin: 0;padding:0;background-color:#dcdcde}.dropdown-menu .+span:not(.badge):not(.badge-pill){margin-right:40px}@media (max-width: ){.navbar-gitlab {position:static}.navbar-gitlab {margin-left:8px !important}.navbar-gitlab >a{padding:0 4px !important} .dropdown .dropdown-menu{width:100%;min-width:100%}}input{border-radius:;color:#333238;background-color:#fff}input[type="search"]{-webkit-appearance:textfield;appearance:textfield}.form-control{border-radius:4px;padding:6px 10px}.form-control::placeholder{color:#89888d}kbd{display:inline-block;padding:3px 5px;font-size:;line-height:10px;color:var(--gray-700, #535158);vertical-align:unset;background-color:var(--gray-10, #fbfafd);border-width:1px;border-style:solid;border-color:var(--gray-100, #dcdcde) var(--gray-100, #dcdcde) var(--gray-200, #bfbfc3);border-image:none;border-radius:3px;box-shadow:0 -1px 0 var(--gray-200, #bfbfc3) inset}.navbar-gitlab{padding:0 16px;z-index:1000;margin-bottom:0;min-height:var(--header-height, 48px);border:0;position:fixed;top:calc(var(--system-header-height) + var(--performance-bar-height));left:0;right:0;border-radius:0}.navbar-gitlab .close-icon{display:none}.navbar-gitlab .header-content{width:100%;display:flex;justify-content:space-between;position:relative;min-height:var(--header-height, 48px);padding-left:0}.navbar-gitlab .header-content .title{padding-right:0;color:currentColor;display:flex;position:relative;margin:0;font-size:18px;vertical-align:top;white-space:nowrap}.navbar-gitlab .header-content .title img{height:24px}.navbar-gitlab .header-content .title a:not(.canary-badge){display:flex;align-items:center;padding:2px 8px;margin:4px 2px 4px -8px;border-radius:4px}.navbar-gitlab .header-content .title a:not(.canary-badge):active{box-shadow:0 0 0 1px rgba(0,0,0,0.6),0 0 0 3px #63a6e9;outline:none}.navbar-gitlab .header-content .navbar-collapse>>li:not(.d-none){margin:0 2px}.navbar-gitlab .header-search{min-width:320px}@media (min-width: 768px) and (max-width: ){.navbar-gitlab .header-search{min-width:200px}}.navbar-gitlab .header-search .keyboard-shortcut-helper{transform:translateY(calc(50% - 2px));box-shadow:none;border-color:transparent}.navbar-gitlab .navbar-collapse{flex:0 0 auto;border-top:0;padding:0}@media (max-width: ){.navbar-gitlab .navbar-collapse{flex:1 1 auto}}.navbar-gitlab .navbar-collapse .nav{flex-wrap:nowrap}@media (max-width: ){.navbar-gitlab .navbar-collapse .nav>li:not(.d-none) a{margin-left:0}}.navbar-gitlab .container-fluid{padding:0}.navbar-gitlab .container-fluid .user-counter svg{margin-right:3px}.navbar-gitlab .container-fluid .navbar-toggler{position:relative;right:-10px;border-radius:0;min-width:45px;padding:0;margin:8px 8px 8px 0;font-size:14px;text-align:center;color:currentColor}.navbar-gitlab .container-fluid .{color:currentColor;background-color:transparent}@media (max-width: ){.navbar-gitlab .container-fluid .navbar-nav{display:flex;padding-right:10px;flex-direction:row}}.navbar-gitlab .container-fluid .navbar-nav li .:not(.gl-badge){box-shadow:none;font-weight:600}@media (max-width: ){.navbar-gitlab .container-fluid .nav>{padding-left:10px}}.navbar-gitlab .container-fluid .nav>li>a{will-change:color;margin:4px 0;padding:6px 8px;height:32px}@media (max-width: ){.navbar-gitlab .container-fluid .nav>li>a{padding:0}}.navbar-gitlab .container-fluid .nav>li>{margin-left:2px}.navbar-gitlab .container-fluid .nav>li> .header-user-avatar{margin-right:0}.navbar-gitlab .container-fluid .nav>li .header-new-dropdown-toggle{margin-right:0}.navbar-sub-nav>li>a,.navbar-sub-nav>li>button,.navbar-nav>li>a,.navbar-nav>li>button{display:flex;align-items:center;justify-content:center;padding:6px 8px;margin:4px 2px;font-size:12px;color:currentColor;border-radius:4px;height:32px;font-weight:600}.navbar-sub-nav>li>a:active,.navbar-sub-nav>li>button:active,.navbar-nav>li>a:active,.navbar-nav>li>button:active{box-shadow:0 0 0 1px rgba(0,0,0,0.6),0 0 0 3px #63a6e9;outline:none}.navbar-sub-nav>li .top-nav-toggle,.navbar-sub-nav>li>button,.navbar-nav>li .top-nav-toggle,.navbar-nav>li>button{background:transparent;border:0}.navbar-sub-nav .dropdown-menu,.navbar-nav .dropdown-menu{position:absolute}.navbar-sub-nav{display:flex;align-items:center;height:100%;margin:0 0 0 6px}.caret-down,.btn .caret-down{top:0;height:11px;width:11px;margin-left:4px;fill:currentColor}.header-user .dropdown-menu,.header-new .dropdown-menu{margin-top:4px}@media (max-width: ){.navbar-gitlab .container-fluid{font-size:18px}.navbar-gitlab .container-fluid .navbar-nav{table-layout:fixed;width:100%;margin:0;text-align:right}.navbar-gitlab .container-fluid .navbar-collapse{margin-left:-8px;margin-right:-10px}.navbar-gitlab .container-fluid .navbar-collapse .nav>li:not(.d-none){flex:1}.header-user-dropdown-toggle{text-align:center}.header-user-avatar{float:none}}.header-user-avatar{float:left;margin-right:5px;border-radius:50%;border:1px solid #f2f2f4}.notification-dot{background-color:#d99530;height:12px;width:12px;pointer-events:none;visibility:hidden;top:3px}.tanuki-logo .tanuki{fill:#e24329}.tanuki-logo .left-cheek,.tanuki-logo .right-cheek{fill:#fc6d26}.tanuki-logo .chin{fill:#fca326}.context-header{position:relative;margin-right:2px;width:256px}.context-header>a,.context-header>button{font-weight:600;display:flex;width:100%;align-items:center;padding:10px 16px 10px 10px;color:#333238;background-color:transparent;border:0;text-align:left}.context-header .avatar-container{flex:0 0 32px;background-color:#fff}.context-header .sidebar-context-title{overflow:hidden;text-overflow:ellipsis;color:#333238}@media (min-width: 768px){.page-with-contextual-sidebar{padding-left:56px}}@media (min-width: 1200px){.page-with-contextual-sidebar{padding-left:256px}}@media (min-width: 768px){.page-with-icon-sidebar{padding-left:56px}}.nav-sidebar{position:fixed;bottom:var(--system-footer-height);left:0;z-index:600;width:256px;top:calc( var(--header-height, 48px) + calc(var(--system-header-height) + var(--performance-bar-height)) + var(--top-bar-height));background-color:#fbfafd;border-right:1px solid #e9e9e9;transform:translate3d(0, 0, 0)}.{width:56px}. .nav-sidebar-inner-scroll{overflow-x:hidden}. .:not(.fly-out-badge),. .nav-item-name,. .collapse-text{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}. .sidebar-top-level-items>li>a{min-height:unset}. .fly-out-top-item:not(.divider){display:block !important}. .avatar-container{margin:0 auto}. :not(.fly-out-top-item)>a{background-color:rgba(41,41,97,)}.nav-sidebar a{text-decoration:none;color:#333238}.nav-sidebar li{white-space:nowrap}.nav-sidebar li .nav-item-name{flex:1;overflow:hidden;text-overflow:ellipsis}.nav-sidebar li>a,.nav-sidebar li>.fly-out-top-item-container{height:2rem;padding-left:;padding-right:;display:flex;align-items:center;border-radius:;width:auto;margin:1px 8px}.nav-sidebar >a{font-weight:600}.nav-sidebar :not(.fly-out-top-item)>a:not(.has-sub-items){background-color:rgba(31,30,36,)}.nav-sidebar ul{padding-left:0;list-style:none}@media (max-width: ){.nav-sidebar{left:-256px}}.nav-sidebar .nav-icon-container{display:flex;margin-right:8px}.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item{display:none}.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item a,.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items . a,.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item .fly-out-top-item-container{margin-left:0;margin-right:0;padding-left:1rem;padding-right:1rem;cursor:default;pointer-events:none;font-size:;margin-top:;margin-bottom:;margin-top:0;position:relative;color:#fff;background:var(--black, #000)}.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item a strong,.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items . a strong,.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item .fly-out-top-item-container strong{font-weight:400}.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item a::before,.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items . a::before,.nav-sidebar a:not(.has-sub-items)+.sidebar-sub-level-items .fly-out-top-item .fly-out-top-item-container::before{position:absolute;content:"";display:block;top:50%;left:;margin-top:;width:0;height:0;border-top: solid transparent;border-bottom: solid transparent;border-right: solid #000;border-right-color:var(--black, #000)}@media (min-width: 576px){.nav-sidebar +.sidebar-sub-level-items{min-width:150px}}.nav-sidebar +.sidebar-sub-level-items .fly-out-top-item{display:none}.nav-sidebar +.sidebar-sub-level-items .fly-out-top-item a,.nav-sidebar +.sidebar-sub-level-items . a,.nav-sidebar +.sidebar-sub-level-items .fly-out-top-item .fly-out-top-item-container{margin-left:0;margin-right:0;padding-left:1rem;padding-right:1rem;cursor:default;pointer-events:none;font-size:;margin-top:0;border-bottom-left-radius:0;border-bottom-right-radius:0}@media (min-width: 768px) and (max-width: 1199px){.nav-sidebar:not(.sidebar-expanded-mobile){width:56px}.nav-sidebar:not(.sidebar-expanded-mobile) .nav-sidebar-inner-scroll{overflow-x:hidden}.nav-sidebar:not(.sidebar-expanded-mobile) .:not(.fly-out-badge),.nav-sidebar:not(.sidebar-expanded-mobile) .nav-item-name,.nav-sidebar:not(.sidebar-expanded-mobile) .collapse-text{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.nav-sidebar:not(.sidebar-expanded-mobile) .sidebar-top-level-items>li>a{min-height:unset}.nav-sidebar:not(.sidebar-expanded-mobile) .fly-out-top-item:not(.divider){display:block !important}.nav-sidebar:not(.sidebar-expanded-mobile) .avatar-container{margin:0 auto}.nav-sidebar:not(.sidebar-expanded-mobile) :not(.fly-out-top-item)>a{background-color:rgba(41,41,97,)}.nav-sidebar:not(.sidebar-expanded-mobile) .context-header{height:60px;width:56px}.nav-sidebar:not(.sidebar-expanded-mobile) .context-header a{padding:10px 4px}.nav-sidebar:not(.sidebar-expanded-mobile) .sidebar-context-title{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.nav-sidebar:not(.sidebar-expanded-mobile) .context-header{height:auto}.nav-sidebar:not(.sidebar-expanded-mobile) .context-header a{padding:}.nav-sidebar:not(.sidebar-expanded-mobile) .sidebar-top-level-items>li .sidebar-sub-level-items:not(.flyout-list){display:none}.nav-sidebar:not(.sidebar-expanded-mobile) .nav-icon-container{margin-right:0}.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button{width:55px;padding:0 21px}.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button .collapse-text{display:none}.nav-sidebar:not(.sidebar-expanded-mobile) .toggle-sidebar-button .icon-chevron-double-lg-left{transform:rotate(180deg);margin:0}}.nav-sidebar-inner-scroll{height:100%;width:100%;overflow-x:hidden;overflow-y:auto}.nav-sidebar-inner-scroll>{margin-top:}.nav-sidebar-inner-scroll> a{height:2rem;padding-left:;padding-right:;display:flex;align-items:center;border-radius:;width:auto;margin:1px 8px;padding:;margin-bottom:;margin-top:;height:auto}.nav-sidebar-inner-scroll> a .avatar-container{font-weight:400;flex:none}.sidebar-top-level-items{margin-bottom:60px}.sidebar-top-level-items .context-header a{padding:;margin-bottom:;margin-top:;height:auto}.sidebar-top-level-items .context-header a .avatar-container{font-weight:400;flex:none}.sidebar-top-level-items> .sidebar-sub-level-items:not(.is-fly-out-only){display:block}.sidebar-top-level-items li>{color:#333238}.sidebar-top-level-items li>:active{text-decoration:none}.sidebar-sub-level-items{padding-top:0;padding-bottom:0;display:none}.sidebar-sub-level-items:not(.fly-out-list) li>a{padding-left:}.toggle-sidebar-button,.close-nav-button{height:48px;padding:0 16px;background-color:#fbfafd;border:0;color:#737278;display:flex;align-items:center;background-color:#fbfafd;position:fixed;bottom:0;width:255px}.toggle-sidebar-button .collapse-text,.toggle-sidebar-button .icon-chevron-double-lg-left,.close-nav-button .collapse-text,.close-nav-button .icon-chevron-double-lg-left{color:inherit}.collapse-text{white-space:nowrap;overflow:hidden}.sidebar-collapsed-desktop .context-header{height:60px;width:56px}.sidebar-collapsed-desktop .context-header a{padding:10px 4px}.sidebar-collapsed-desktop .sidebar-context-title{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.sidebar-collapsed-desktop .context-header{height:auto}.sidebar-collapsed-desktop .context-header a{padding:}.sidebar-collapsed-desktop .sidebar-top-level-items>li .sidebar-sub-level-items:not(.flyout-list){display:none}.sidebar-collapsed-desktop .nav-icon-container{margin-right:0}.sidebar-collapsed-desktop .toggle-sidebar-button{width:55px;padding:0 21px}.sidebar-collapsed-desktop .toggle-sidebar-button .collapse-text{display:none}.sidebar-collapsed-desktop .toggle-sidebar-button .icon-chevron-double-lg-left{transform:rotate(180deg);margin:0}.close-nav-button{display:none}@media (max-width: ){.close-nav-button{display:flex}.toggle-sidebar-button{display:none}}.super-sidebar{display:flex;flex-direction:column;position:fixed;top:calc( var(--header-height, 48px) + calc(var(--system-header-height) + var(--performance-bar-height)));bottom:var(--system-footer-height);left:0;background-color:var(--gray-10, #fbfafd);border-right:1px solid rgba(31,30,36,);transform:translate3d(0, 0, 0);width:256px;z-index:600}.{transform:translate3d(-100%, 0, 0)}@media (min-width: 1200px){.{transform:translate3d(0, 0, 0)}}.page-with-super-sidebar{padding-left:0}@media (min-width: 1200px){.page-with-super-sidebar{padding-left:256px}}.page-with-super-sidebar-collapsed .super-sidebar{transform:translate3d(-100%, 0, 0)}@media (min-width: 1200px){.page-with-super-sidebar-collapsed{padding-left:0}}input::-moz-placeholder{color:#89888d;opacity:1}input::-ms-input-placeholder{color:#89888d}input:-ms-input-placeholder{color:#89888d}svg{fill:currentColor}{width:12px;height:12px}{width:16px;height:16px}{width:32px;height:32px}{vertical-align:-1px}{vertical-align:-3px}.avatar,.avatar-container{float:left;margin-right:16px;border-radius:50%}.,.{width:16px;height:16px;margin-right:8px}.,.{width:32px;height:32px;margin-right:8px}.avatar{transition-property:none;width:40px;height:40px;padding:0;background:#fefefe;overflow:hidden;box-shadow:inset 0 0 0 1px rgba(31,30,36,0.1)}.{border-radius:0;border:0}.identicon{text-align:center;vertical-align:top;color:#333238;background-color:#ececef}.{font-size:10px;line-height:16px}.{font-size:14px;line-height:32px}.{background-color:#fcf1ef}.{background-color:#f4f0ff}.{background-color:#f1f1ff}.{background-color:#e9f3fc}.{background-color:#ecf4ee}.{background-color:#fdf1dd}.{background-color:#ececef}.avatar-container{overflow:hidden;display:flex}.avatar-container a{width:100%;height:100%;display:flex;text-decoration:none}.avatar-container .avatar{border-radius:0;border:0;height:auto;width:100%;margin:0;align-self:center}.rect-avatar{border-radius:2px}.{border-radius:2px}. .avatar{border-radius:2px}.{border-radius:4px}. .avatar{border-radius:4px}.tab-width-8{tab-size:8}.gl-sr-only{border:0;clip:rect(0, 0, 0, 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;white-space:nowrap;width:1px}.gl-border-none\!{border-style:none !important}.gl-display-none{display:none}.gl-display-flex{display:flex}@media (min-width: 992px){.gl-lg-display-flex{display:flex}}@media (min-width: 576px){.gl-sm-display-block{display:block}}@media (min-width: 992px){.gl-lg-display-block{display:block}}.gl-align-items-center{align-items:center}.gl-align-items-stretch{align-items:stretch}.gl-flex-grow-0\!{flex-grow:0 !important}.gl-flex-grow-1{flex-grow:1}.gl-flex-basis-half\!{flex-basis:50% !important}.gl-justify-content-end{justify-content:flex-end}.gl-relative{position:relative}.gl-absolute{position:absolute}.gl-top-0{top:0}.gl-right-3{right:}.gl-w-full{width:100%}.gl-px-3{padding-left:;padding-right:}.gl-pr-2{padding-right:}.gl-pt-0{padding-top:0}.gl-mr-auto{margin-right:auto}.gl-mr-3{margin-right:}.gl-ml-n2{margin-left:}.gl-ml-3{margin-left:}.gl-mx-0\!{margin-left:0 !important;margin-right:0 !important}.gl-text-right{text-align:right}.gl-white-space-nowrap{white-space:nowrap}.gl-font-sm{font-size:}.gl-font-weight-bold{font-weight:600}.gl-z-index-1{z-index:1}.cloak-startup,.content-wrapper>.alert-wrapper,#content-body,.modal-dialog{display:none}

  </style>


</head>





<body class="ui-indigo tab-width-8 gl-browser-chrome gl-platform-android" data-find-file="/bosch-nerds/ebike/-/find_file/master" data-group="bosch-nerds" data-namespace-id="510" data-page="projects:show" data-page-type-id="ebike" data-project="ebike" data-project-id="158">
<br>
<div class="layout-page hide-when-top-nav-responsive-open page-with-contextual-sidebar"><p>Black lesbian pics philadelphia. . <br><br><BR><UL><LI><a href=http://www.gogreenaffordable.com/pgcgb</p>
<div class="content-wrapper">
<div class="container-fluid container-limited project-highlight-puc">
<div class="progress repository-languages-bar js-show-on-project-root">
<div class="progress-bar has-tooltip" style="width: 100%; background-color: rgb(227, 76, 38);" data-html="true" title="&lt;span class=&quot;repository-language-bar-tooltip-language&quot;&gt;HTML&lt;/span&gt;&amp;nbsp;&lt;span class=&quot;repository-language-bar-tooltip-share&quot;&gt;100.0%&lt;/span&gt;">. <br><br><BR><UL><LI><a href=http://www.gogreenaffordable.com/pgcgb/marshall-dsl40c-schematic.html>marshall dsl40c schematic</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/aigiri-nandini-lyrics-pdf.html>aigiri nandini lyrics pdf</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/killer-network-service-keeps-stopping.html>killer network service keeps stopping</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/transmigration-modern-bl.html>transmigration modern bl</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/holland-lop-bunnies-for-sale-miami-beach.html>holland lop bunnies for sale miami beach</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/check-esp-renault-laguna.html>check esp renault laguna</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/p0171-code-bmw-328i.html>p0171 code bmw 328i</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/cecil-creek-farm-reviews.html>cecil creek farm reviews</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/addon-for-fast-leveling-wow.html>addon for fast leveling wow</a></LI><LI><a href=http://www.gogreenaffordable.com/pgcgb/is-kyo-kaneko-sick.html>is kyo kaneko sick</a></LI></UL><br><br></div>
</div>




<div class="project-show-files">
<div class="tree-holder clearfix js-per-page" data-blame-per-page="1000" id="tree-holder">
<div class="info-well gl-display-none gl-sm-display-flex project-last-commit gl-flex-direction-column gl-mt-5">
<div class="gl-m-auto" id="js-last-commit">
<div class="gl-spinner-container" role="status"><span aria-label="Loading" class="gl-spinner gl-spinner-md gl-spinner-dark gl-vertical-align-text-bottom!"></span></div>

</div>

<div data-branch="master" data-branch-rules-path="/bosch-nerds/ebike/-/settings/repository#js-branch-rules" id="js-code-owners"></div>

</div>
<br>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
