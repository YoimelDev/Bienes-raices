/// <reference types="cypress" />

describe('Carga la pagina principal', () => {
    it('Prueba el header de la pagina principal', () => {
        cy.visit('/')

        cy.get('[data-cy="heading-sitio"]')
    })
})