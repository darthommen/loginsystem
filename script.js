class Calculator {
    constructor(previousOperandTextElement, currentOperandTextElement) {
        this.previousOperandTextElement = previousOperandTextElement
        this.currentOperandTextElement = currentOperandTextElement
        this.clear()
    }
}

clear() {
    this.currentOperand = ''
    this.previousOperand = ''
    this.operation = undefined
}

delete() {

}

appendNumber(Number) {
    this.currentOperand = number

}

chooseOperation(operation) {

}

compute() {

}

updateDisplay() {
    this.currentOperandTextElement.innerText = this.currentOperand
}

const numberButtons = document.querySelectorAll('[data-num')
const operationButtons = document.querySelectorAll('[data-op')
const equalsButton = document.querySelector('[data-eq')
const deleteButton = document.querySelector('[data-del')
const AllClearButton = document.querySelector('[data-allclear')
const deleteButton = document.querySelector('[data-del')
previousOperandTextElement = document.querySelector('[data-pre-op]')
currentOperandTextElement = document.querySelector('[data-cur-op]')

const calculoter = new Calculator(previousOperandTextElement, currentOperandTextElement)

numberButtons.forEach(button => {
    button.addEventListener('click', () => {
        calculator.appendNumber(button.innerText)
        calculator.updateDisplay()
    })
})