document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step');
    const sections = document.querySelectorAll('.menu-section');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const totalAmount = document.getElementById('total');
    let currentStep = 0;

    function showSection(index) {
        sections.forEach((section, idx) => {
            section.classList.toggle('active', idx === index);
        });
        steps.forEach((step, idx) => {
            step.classList.toggle('active', idx === index);
        });
    }

    steps.forEach((step, index) => {
        step.addEventListener('click', () => {
            currentStep = index;
            showSection(currentStep);
        });
    });

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateTotal);
    });

    function updateTotal() {
        let total = 0;
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                total += parseInt(checkbox.value, 10);
            }
        });
        totalAmount.textContent = total;
    }

    document.getElementById('next-step').addEventListener('click', () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showSection(currentStep);
        }
    });

    showSection(currentStep);
});