import 'bootstrap/dist/js/bootstrap.bundle.min.js'

// Fix completo para menú móvil - deshabilitar Bootstrap completamente
document.addEventListener('DOMContentLoaded', function () {
    const navbarToggler = document.querySelector('.navbar-toggler')
    const mobileNav = document.getElementById('mobileNav')

    if (navbarToggler && mobileNav) {
        let isMenuOpen = false

        // Deshabilitar completamente el comportamiento de Bootstrap
        navbarToggler.setAttribute('data-bs-toggle', '')
        navbarToggler.setAttribute('data-bs-target', '')

        // Remover todas las clases de collapse de Bootstrap
        mobileNav.classList.remove('collapse', 'navbar-collapse')
        mobileNav.classList.add('mobile-menu-custom')

        // Asegurar que todos los dropdowns empiecen cerrados
        function initializeDropdowns () {
            const dropdownMenus = mobileNav.querySelectorAll('.dropdown-menu')
            dropdownMenus.forEach(menu => {
                menu.classList.remove('show')
            })

            const dropdownToggles =
                mobileNav.querySelectorAll('.dropdown-toggle')
            dropdownToggles.forEach(toggle => {
                toggle.setAttribute('aria-expanded', 'false')
                // Deshabilitar Bootstrap en los dropdowns también
                toggle.setAttribute('data-bs-toggle', '')
            })
        }

        // Inicializar dropdowns cerrados
        initializeDropdowns()

        // Toggle del menú principal - versión simplificada
        navbarToggler.addEventListener('click', function (e) {
            e.preventDefault()
            e.stopPropagation()

            isMenuOpen = !isMenuOpen
            if (isMenuOpen) {
                mobileNav.style.display = 'block'
                mobileNav.classList.add('show')
            } else {
                mobileNav.style.display = 'none'
                mobileNav.classList.remove('show')
                closeAllDropdowns()
            }
        })

        // Manejar dropdowns dentro del menú móvil
        const dropdownToggles = mobileNav.querySelectorAll('.dropdown-toggle')
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function (e) {
                e.preventDefault()
                e.stopPropagation()

                const dropdownMenu = this.nextElementSibling
                const isOpen = dropdownMenu.classList.contains('show')

                // Cerrar todos los dropdowns primero
                closeAllDropdowns()

                // Abrir el actual si no estaba abierto
                if (!isOpen) {
                    dropdownMenu.classList.add('show')
                    this.setAttribute('aria-expanded', 'true')
                }
            })
        })

        // Cerrar menú al hacer click fuera
        document.addEventListener('click', function (e) {
            if (
                isMenuOpen &&
                !mobileNav.contains(e.target) &&
                !navbarToggler.contains(e.target)
            ) {
                mobileNav.style.display = 'none'
                mobileNav.classList.remove('show')
                closeAllDropdowns()
                isMenuOpen = false
            }
        })

        // Función para cerrar todos los dropdowns
        function closeAllDropdowns () {
            const openDropdowns = mobileNav.querySelectorAll(
                '.dropdown-menu.show'
            )
            openDropdowns.forEach(dropdown => {
                dropdown.classList.remove('show')
            })

            const expandedToggles = mobileNav.querySelectorAll(
                '.dropdown-toggle[aria-expanded="true"]'
            )
            expandedToggles.forEach(toggle => {
                toggle.setAttribute('aria-expanded', 'false')
            })
        }

        // Cerrar menú al hacer click en un enlace normal (no dropdown)
        const navLinks = mobileNav.querySelectorAll(
            '.nav-link:not(.dropdown-toggle), .dropdown-item'
        )
        navLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                // Solo cerrar si es un enlace normal, no un dropdown-toggle
                if (!this.classList.contains('dropdown-toggle')) {
                    mobileNav.style.display = 'none'
                    mobileNav.classList.remove('show')
                    closeAllDropdowns()
                    isMenuOpen = false
                }
            })
        })

        // Inicializar el menú como cerrado
        mobileNav.style.display = 'none'
    }

    // Hover para dropdowns desktop (mantener funcionalidad desktop)
    const desktopDropdowns = document.querySelectorAll(
        '.desktop-menu .dropdown'
    )
    desktopDropdowns.forEach(dropdown => {
        dropdown.addEventListener('mouseenter', function () {
            this.querySelector('.dropdown-menu').style.display = 'block'
        })

        dropdown.addEventListener('mouseleave', function () {
            this.querySelector('.dropdown-menu').style.display = 'none'
        })
    })
})
