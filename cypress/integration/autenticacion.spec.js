/// <reference types="cypress" />

describe('Probar la autenticacion', () => {
    it('Prueba la autenticacion en /login', () => {
        cy.visit('/login')

        cy.get('[data-cy="heading-login"]').should('exist')
        cy.get('[data-cy="heading-login"]').should('have.text', 'Iniciar Sesion')

        cy.get('[data-cy="formulario-login"]').should('exist')

        // Ambos campos son obligatorios
        cy.get('[data-cy="formulario-login"]').submit()
        cy.get('[data-cy="alerta-login"]').should('exist')
        cy.get('[data-cy="alerta-login"]').eq(0).should('have.class', 'error')
        cy.get('[data-cy="alerta-login"]').eq(1).should('have.class', 'error')

        cy.get('[data-cy="input-email"]').should('exist')
        cy.get('[data-cy="input-password"]').should('exist')

        cy.get('[data-cy="input-email"]').type('correo@test.com')
        cy.get('[data-cy="input-password"]').type('123456')

        cy.get('[data-cy="formulario-login"]').submit()

        cy.get('[data-cy="alerta-login"]').should('have.text', 'El usuario no existe')

        cy.get('[data-cy="input-email"]').type('correo@correo.com')
        cy.get('[data-cy="input-password"]').type('123456')

        cy.get('[data-cy="formulario-login"]').submit()

        cy.get('[data-cy="heading-admin"]').should('exist')

        cy.visit('/login')

        cy.get('[data-cy="heading-login"]').should('exist')

    })
})