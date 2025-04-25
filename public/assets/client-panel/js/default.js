// 'use strict';
var flg = '0';
document.addEventListener('DOMContentLoaded', function () {
    // feather.replace(); // REMOVIDO: Não depende mais do Feather
    setTimeout(function () {
        var loader = document.querySelector('.loader-bg');
        if (loader) loader.remove();
    }, 400);

    add_scroller();

    // DEBUG: Verifica se o botão existe
    var mobileCollapse = document.getElementById('mobile-collapse');
    if (mobileCollapse) {
        mobileCollapse.addEventListener('click', function (e) {
            e.preventDefault();
            var sidebar = document.querySelector('.pc-sidebar');
            if (!sidebar) return;
            if (sidebar.classList.contains('mob-sidebar-active')) {
                rm_menu();
            } else {
                sidebar.classList.add('mob-sidebar-active');
                // Remove overlay anterior se existir
                var oldOverlay = sidebar.querySelector('.pc-menu-overlay');
                if (oldOverlay) oldOverlay.remove();
                // Cria overlay
                var overlay = document.createElement('div');
                overlay.className = 'pc-menu-overlay';
                overlay.onclick = function () {
                    rm_menu();
                };
                sidebar.appendChild(overlay);
            }
            // DEBUG: Verifica se a classe foi aplicada
        });
    }

    // NOVO: Botão para esconder/exibir sidebar no desktop
    var sidebarHide = document.getElementById('sidebar-hide');
    if (sidebarHide) {
        sidebarHide.addEventListener('click', function (e) {
            e.preventDefault();
            var sidebar = document.querySelector('.pc-sidebar');
            if (!sidebar) return;
            sidebar.classList.toggle('pc-sidebar-hide');
        });
    }
});

function add_scroller() {
    menu_click();
}

function menu_click() {
    var vw = window.innerWidth;
    var elem = document.querySelectorAll('.pc-navbar li');
    for (var j = 0; j < elem.length; j++) {
        elem[j].removeEventListener('click', function () { });
    }
    var elem = document.querySelectorAll('.pc-navbar li:not(.pc-trigger) .pc-submenu');
    for (var j = 0; j < elem.length; j++) {
        elem[j].style.display = 'none';
    }
    var pc_link_click = document.querySelectorAll('.pc-navbar > li:not(.pc-caption).pc-hasmenu');
    for (var i = 0; i < pc_link_click.length; i++) {
        pc_link_click[i].addEventListener('click', function (event) {
            event.stopPropagation();
            var targetElement = event.target;
            if (targetElement.tagName == 'SPAN') {
                targetElement = targetElement.parentNode;
            }
            if (targetElement.parentNode.classList.contains('pc-trigger')) {
                targetElement.parentNode.classList.remove('pc-trigger');
                slideUp(targetElement.parentNode.children[1], 200);
            } else {
                // Fecha outros
                var c = document.querySelectorAll('.pc-navbar > li.pc-hasmenu.pc-trigger');
                for (var k = 0; k < c.length; k++) {
                    c[k].classList.remove('pc-trigger');
                    slideUp(c[k].children[1], 200);
                }
                targetElement.parentNode.classList.add('pc-trigger');
                slideDown(targetElement.parentNode.children[1], 200);
            }
        });
    }
}

function rm_menu() {
    var sidebar = document.querySelector('.pc-sidebar');
    if (sidebar) {
        sidebar.classList.remove('mob-sidebar-active');
        var overlay = sidebar.querySelector('.pc-menu-overlay');
        if (overlay) overlay.remove();
    }
}

window.addEventListener('load', function () {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });
});

let slideUp = (target, duration = 0) => {
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.height = target.offsetHeight + 'px';
    target.offsetHeight; // force repaint
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    window.setTimeout(() => {
        target.style.display = 'none';
        target.style.removeProperty('height');
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
};
let slideDown = (target, duration = 0) => {
    target.style.removeProperty('display');
    let display = window.getComputedStyle(target).display;
    if (display === 'none') display = 'block';
    target.style.display = display;
    let height = target.offsetHeight;
    target.style.overflow = 'hidden';
    target.style.height = 0;
    target.style.paddingTop = 0;
    target.style.paddingBottom = 0;
    target.style.marginTop = 0;
    target.style.marginBottom = 0;
    target.offsetHeight;
    target.style.transitionProperty = 'height, margin, padding';
    target.style.transitionDuration = duration + 'ms';
    target.style.height = height + 'px';
    target.style.removeProperty('padding-top');
    target.style.removeProperty('padding-bottom');
    target.style.removeProperty('margin-top');
    target.style.removeProperty('margin-bottom');
    window.setTimeout(() => {
        target.style.removeProperty('height');
        target.style.removeProperty('overflow');
        target.style.removeProperty('transition-duration');
        target.style.removeProperty('transition-property');
    }, duration);
};
var slideToggle = (target, duration = 0) => {
    if (window.getComputedStyle(target).display === 'none') {
        return slideDown(target, duration);
    } else {
        return slideUp(target, duration);
    }
};
