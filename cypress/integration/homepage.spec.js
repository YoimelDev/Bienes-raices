/// <reference types="cypress" />

describe('Carga la pagina principal', () => {
    it('Prueba el header de la pagina principal', () => {
        cy.visit('/')

        cy.get('[data-cy="heading-sitio"]').should('exist')
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('equal', 'Venta de Casas y Departamentos Exclusivos de Lujo')
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('not.equal', 'Bienes Raices')
    })

    it('Prueba el bloque de los iconos principales', () => {
        cy.get('[data-cy="heading-nosotros"').should('exist')
        cy.get('[data-cy="heading-nosotros"').should('have.prop', 'tagName').should('equal', 'H2')

        // Selecciona los iconos
        cy.get('[data-cy="iconos-nosotros"').should('exist')
        cy.get('[data-cy="iconos-nosotros"').find('.icono').should('have.length', 3)
        cy.get('[data-cy="iconos-nosotros"').find('.icono').should('not.have.length', 4)
    })

    it('Prueba la seccion de propiedades', () => {
        // Debe haber 3 propiedades
        cy.get('[data-cy="anuncio"]').should('have.length', 3)
        cy.get('[data-cy="anuncio"]').should('not.have.length', 6)

        cy.get('[data-cy="enlace-propiedad"]').should('have.class', 'boton-amarillo-block')

        cy.get('[data-cy="enlace-propiedad"]').first().invoke('text').should('equal', 'Ver Propiedad')

        cy.get('[data-cy="enlace-propiedad"]').first().click()
        cy.get('[data-cy="titulo-propiedad"]').should('exist')

        cy.wait(1000)
        cy.go('back')
    })

    it('Prueba el routing hacia todas las propiedades', () => {
        cy.get('[data-cy="todas-propiedades"]').should('exist')
        cy.get('[data-cy="todas-propiedades"]').should('have.class', 'boton-verde')
        cy.get('[data-cy="todas-propiedades"]').invoke('attr', 'href').should('equal', '/propiedades')

        cy.get('[data-cy="todas-propiedades"]').click()
        cy.get('[data-cy="heading-propiedades"]').invoke('text').should('equal', 'Casas y Depas en Venta')

        cy.wait(1000)
        cy.go('back')
    })
})