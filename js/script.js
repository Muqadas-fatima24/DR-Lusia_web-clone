// TO DROPDOWN
document.addEventListener('DOMContentLoaded', function () {
let dropdownMenu = document.querySelector(".nav-item .dropdown-menu");
let dropdownIcon = document.querySelector(".nav-item .nav-link svg");

if (dropdownMenu && dropdownIcon) {
    dropdownIcon.addEventListener("click", () => {
        if (dropdownMenu.style.display === 'none' || dropdownMenu.style.display === '') {
            dropdownMenu.style.display = 'initial';
        } else {
            dropdownMenu.style.display = 'none';
        }
    });
} 
});
// END TO DROPDOWN

//  form validation
// ................................
document.addEventListener('DOMContentLoaded', function() {
    // Get form elements
    const form = document.getElementById('contactus');
    const submitButton = document.getElementById('submitContactForm');
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const practiceSelect = document.getElementById('practice');
    const messageTextarea = document.getElementById('message');
    const consentCheckbox = document.getElementById('consentCheckbox');

    // Get modal elements
    const validationModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    const modalBody = document.querySelector('#staticBackdrop .modal-body');
    const modalTitle = document.getElementById('staticBackdropLabel');

    // Get specific error message divs
    const errorNameRequired = document.getElementById('error-name-required');
    const errorEmailRequired = document.getElementById('error-email-required'); 
    const errorEmailInvalid = document.getElementById('error-email-invalid');
    const errorPhoneRequired = document.getElementById('error-phone-required');
    const errorPhoneInvalid = document.getElementById('error-phone-invalid');
    const errorPracticeRequired = document.getElementById('error-practice-required');
    const errorMessageRequired = document.getElementById('error-message-required');
    const errorMessageMinlength = document.getElementById('error-message-minlength');
    const errorConsentRequired = document.getElementById('error-consent-required');
    const successMessage = document.getElementById('success-message'); // This holds the 'Ffully!' text

    // Helper function to hide all error messages
    function hideAllErrors() {
        document.querySelectorAll('.validation-error').forEach(el => el.style.display = 'none');
        successMessage.style.display = 'none';
    }
 
    // Helper function to validate email format
    function isValidEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Helper function to validate phone number (basic check)
    function isValidPhone(phone) {
        const re = /^\+?[0-9\s-]{7,15}$/;
        return re.test(String(phone));
    }

    // Main validation and modal display function 
    function handleFormSubmission(event) {
        event.preventDefault(); // Prevent default form submission

        const formIsValid = validateForm(); // Run validation

        if (!formIsValid) {
            modalTitle.textContent = 'Validation Error'; // Sets title for errors
            successMessage.style.display = 'none'; // Ensure success message is hidden if errors
            validationModal.show(); // Show modal with errors
        } else {

            hideAllErrors(); 

            modalTitle.textContent = 'Form Submitted!'; 
            successMessage.style.display = 'block'; 

            validationModal.show(); // Show modal with success message

            console.log("Form is valid! Preparing to submit via AJAX...");
            form.reset();
        }
    }

    // Main validation logic (called by handleFormSubmission);
    function validateForm() {
        let isValid = true;
        hideAllErrors(); // Start by hiding all error messages

        // Validate Name
        if (nameInput.value.trim() === '') {
            errorNameRequired.style.display = 'block';
            isValid = false;
        }

        // Validate Email
        if (emailInput.value.trim() === '') {
            errorEmailRequired.style.display = 'block';
            isValid = false;
        } else if (!isValidEmail(emailInput.value.trim())) {
            errorEmailInvalid.style.display = 'block';
            isValid = false;
        }

        // Validate Phone Number
        if (phoneInput.value.trim() === '') {
            errorPhoneRequired.style.display = 'block';
            isValid = false; 
        } else if (!isValidPhone(phoneInput.value.trim())) {
            errorPhoneInvalid.style.display = 'block';
            isValid = false;
        }

        // Validate Practice Selection
        if (practiceSelect.value === '' || practiceSelect.value === 'Which Practice would you like to be treated at') {
            errorPracticeRequired.style.display = 'block';
            isValid = false;
        }

        // Validate Message
        if (messageTextarea.value.trim() === '') {
            errorMessageRequired.style.display = 'block';
            isValid = false;
        } else if (messageTextarea.value.trim().length < 10) {  
            errorMessageMinlength.style.display = 'block';
            isValid = false;
        }

        // Validate Consent Checkbox
        if (!consentCheckbox.checked) {
            errorConsentRequired.style.display = 'block';
            isValid = false;
        }

        return isValid;
    }

    // Event listener for the submit button
    submitButton.addEventListener('click', handleFormSubmission);

    // Add event listeners for 'keydown' on all relevant input fields
    const formFields = [
        nameInput,
        emailInput,
        phoneInput,
        practiceSelect,
        messageTextarea
    ];

    formFields.forEach(field => {
        field.addEventListener('keydown', function(event) {
            if (event.key === 'Enter' || event.keyCode === 13) {
                event.preventDefault();
                handleFormSubmission(event);
            }
        });
    });
});
// .,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
//////////////////////////for back img//////////////////////
document.addEventListener('DOMContentLoaded', function() {
  
    const nameInput = document.getElementById('name');
    const emailInput = document.getElementById('email');
    const phoneInput = document.getElementById('phone');
    const messageTextarea = document.getElementById('message');
   

    const formFieldsToManageBackground = [
        nameInput,
        emailInput,
        phoneInput,
        messageTextarea
    ];

    function toggleInputBackground(inputElement) {
        if (inputElement.value.trim() !== '') {
            inputElement.classList.add('no-background-image'); 
        } else {
            inputElement.classList.remove('no-background-image'); 
        }
    } 

    formFieldsToManageBackground.forEach(toggleInputBackground);
    formFieldsToManageBackground.forEach(field => {
        // On focus:- 
        field.addEventListener('focus', function() {
            this.classList.add('no-background-image');
        });

        // While typing (on 'input' event):
        field.addEventListener('input', function() {
            toggleInputBackground(this);
        });
        // On blur (when leaving the field):
        field.addEventListener('blur', function() {
            toggleInputBackground(this);
        });
    });

    // if (practiceSelect) {
    //     // Initial check for select element on page load
    //     if (practiceSelect.value === '' || practiceSelect.value === 'Which Practice would you like to be treated at') {
    //         practiceSelect.classList.remove('no-background-image'); 
    //     } else {
    //         practiceSelect.classList.add('no-background-image'); 
    //     }

    //     practiceSelect.addEventListener('change', function() {
    //         if (this.value === '' || this.value === 'Which Practice would you like to be treated at') {
    //             this.classList.remove('no-background-image');
    //         } else {
    //             this.classList.add('no-background-image');
    //         }
    //     });

    //     // On focus for selec
    //     practiceSelect.addEventListener('focus', function() {
    //         this.classList.add('no-background-image');
    //     });
    
    // }
});

// =======================for teeth scroller=======================================
// document.addEventListener('DOMContentLoaded', function() {
//   const imageList = document.getElementById('imageList');
//   const scrollbarThumb = document.querySelector('.scrollbar-thumb');
//   const scrollbarTrack = document.querySelector('.scrollbar-track');

//   const updateThumbPosition = () => {
//     const scrollRatio = imageList.scrollLeft / (imageList.scrollWidth - imageList.clientWidth);
//     const thumbMaxLeft = scrollbarTrack.clientWidth - scrollbarThumb.clientWidth;
//     scrollbarThumb.style.left = `${scrollRatio * thumbMaxLeft}px`;
//   };

//   // Move scrollbar thumb when image list is scrolled
//   imageList.addEventListener('scroll', updateThumbPosition);

//   // Dragging the scrollbar thumb
//   let isDragging = false;
//   let startX;

//   scrollbarThumb.addEventListener('mousedown', (e) => {
//     isDragging = true;
//     startX = e.clientX - scrollbarThumb.offsetLeft;
//     scrollbarThumb.style.cursor = "grabbing";
//     document.body.style.userSelect = 'none';
//   });

//   document.addEventListener('mouseup', () => {
//     isDragging = false;
//     scrollbarThumb.style.cursor = "grab";
//     document.body.style.userSelect = '';
//   });

//   document.addEventListener('mousemove', (e) => {
//     if (!isDragging) return;
//     e.preventDefault();
//     const trackRect = scrollbarTrack.getBoundingClientRect();
//     let newLeft = e.clientX - trackRect.left - startX;

//     const maxLeft = scrollbarTrack.clientWidth - scrollbarThumb.clientWidth;
//     newLeft = Math.max(0, Math.min(newLeft, maxLeft));
//     scrollbarThumb.style.left = `${newLeft}px`;

//     // Sync image list scroll
//     const scrollRatio = newLeft / maxLeft;
//     imageList.scrollLeft = scrollRatio * (imageList.scrollWidth - imageList.clientWidth);
//   });


//   // Initialize thumb position
//   window.addEventListener('load', updateThumbPosition);
//   window.addEventListener('resize', updateThumbPosition);
// });
// '''''''''''''''''''''''''''''''''''''''''''''''''''''''''..
// when click on nav links colors
document.addEventListener('DOMContentLoaded', function() {

    const navLinks = document.querySelectorAll('.nav-link');
    const currentPageUrl = window.location.href;

    for (let i = 0; i < navLinks.length; i++) {

        const navLink = navLinks[i];
        const linkUrl = navLink.href;
        if (currentPageUrl.includes(linkUrl) && linkUrl.length > 0) {
            navLink.classList.add('active-around');
            const parentDropdown = navLink.closest('.dropdown-menu');
            if (parentDropdown) {
                // Find the dropdown button associated with this menu.
                const dropdownButton = parentDropdown.previousElementSibling;
                if (dropdownButton && dropdownButton.classList.contains('dropdown-toggle')) {
                    dropdownButton.classList.add('active-around');
                }
            }
        }
    }

}); 
// [[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[]]]]]]]]]]]]]]]]]]]]]]
// ,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,
document.addEventListener('DOMContentLoaded', function() {
    // Get form and input elements
    const form = document.querySelector('.flex-form-content-set');
    const nameInput = form.querySelector('#name');
    const phoneInput = form.querySelector('#phone');
    const emailInput = form.querySelector('#email');
    const practiceSelect = form.querySelector('#practice');
    const messageTextarea = form.querySelector('#message');
    const consentCheckbox = form.querySelector('#consentCheckbox');

    // Get modal elements
    const validationModal = new bootstrap.Modal(document.getElementById('staticBackdrop'));
    const modalTitle = document.getElementById('staticBackdropLabel');
    const successMessage = document.getElementById('success-message');

    // Get specific error message divs
    const errorNameRequired = document.getElementById('error-name-required');
    const errorEmailRequired = document.getElementById('error-email-required');
    const errorEmailInvalid = document.getElementById('error-email-invalid');
    const errorPhoneRequired = document.getElementById('error-phone-required');
    const errorPhoneInvalid = document.getElementById('error-phone-invalid');
    const errorPracticeRequired = document.getElementById('error-practice-required');
    const errorMessageRequired = document.getElementById('error-message-required');
    const errorMessageMinlength = document.getElementById('error-message-minlength');
    const errorConsentRequired = document.getElementById('error-consent-required');

    // Helper function to hide all error and success messages
    function hideAllMessages() {
        document.querySelectorAll('.validation-error').forEach(el => el.style.display = 'none');
        successMessage.style.display = 'none';
    }

    // Helper function to validate email format
    function isValidEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    // Helper function to validate phone number (basic check)
    function isValidPhone(phone) {
        const re = /^\+?[0-9\s-]{7,15}$/;
        return re.test(String(phone));
    }

    // Main validation and modal display function
    function handleFormSubmission(event) {
        event.preventDefault(); // Prevent the form from submitting normally
        hideAllMessages(); // Start by hiding all messages

        let isValid = true;
        const errors = [];

        // Validate Name
        if (nameInput.value.trim() === '') {
            errors.push(errorNameRequired);
            isValid = false;
        }

        // Validate Phone Number
        if (phoneInput.value.trim() === '') {
            errors.push(errorPhoneRequired);
            isValid = false;
        } else if (!isValidPhone(phoneInput.value.trim())) {
            errors.push(errorPhoneInvalid);
            isValid = false;
        }

        // Validate Email
        if (emailInput.value.trim() === '') {
            errors.push(errorEmailRequired);
            isValid = false;
        } else if (!isValidEmail(emailInput.value.trim())) {
            errors.push(errorEmailInvalid);
            isValid = false;
        }

        // Validate Practice Selection
        if (practiceSelect.value === '') {
            errors.push(errorPracticeRequired);
            isValid = false;
        }

        // Validate Message
        if (messageTextarea.value.trim() === '') {
            errors.push(errorMessageRequired);
            isValid = false;
        } else if (messageTextarea.value.trim().length < 10) {
            errors.push(errorMessageMinlength);
            isValid = false;
        }

        // Validate Consent Checkbox
        if (!consentCheckbox.checked) {
            errors.push(errorConsentRequired);
            isValid = false;
        }

        // Display the modal based on validation results
        if (!isValid) {
            modalTitle.textContent = 'Validation Error';
            errors.forEach(errorEl => errorEl.style.display = 'block');
            validationModal.show();
        } else {
            // If the form is valid
            modalTitle.textContent = 'Form Submitted!';
            successMessage.style.display = 'block';
            validationModal.show();

            // Clear the form after successful submission
            form.reset();
        }
    }

    // Attach the submission handler to the form's submit event
    form.addEventListener('submit', handleFormSubmission);
}); 

// practice >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
// =======================for teeth scroller=======================================
document.addEventListener('DOMContentLoaded', function() {
  const imageList = document.getElementById('imageList');
  const scrollbarThumb = document.querySelector('.scrollbar-thumb');
  const scrollbarTrack = document.querySelector('.scrollbar-track');

  const updateThumbPosition = () => {
    if (imageList.scrollWidth > imageList.clientWidth) {
      const scrollRatio = imageList.scrollLeft / (imageList.scrollWidth - imageList.clientWidth);
      const thumbMaxLeft = scrollbarTrack.clientWidth - scrollbarThumb.clientWidth;
      scrollbarThumb.style.left = `${scrollRatio * thumbMaxLeft}px`;
    }
  };

  // Move scrollbar thumb when image list is scrolled
  imageList.addEventListener('scroll', updateThumbPosition);

  // Dragging the scrollbar thumb
  let isDraggingThumb = false;
  let startXThumb;

  scrollbarThumb.addEventListener('mousedown', (e) => {
    isDraggingThumb = true;
    startXThumb = e.clientX - scrollbarThumb.offsetLeft;
    scrollbarThumb.style.cursor = "grabbing";
    document.body.style.userSelect = 'none';
  });

  document.addEventListener('mouseup', () => {
    isDraggingThumb = false;
    scrollbarThumb.style.cursor = "grab";
    document.body.style.userSelect = '';
  });

  document.addEventListener('mousemove', (e) => {
    if (!isDraggingThumb) return;
    e.preventDefault();
    const trackRect = scrollbarTrack.getBoundingClientRect();
    let newLeft = e.clientX - trackRect.left - startXThumb;

    const maxLeft = scrollbarTrack.clientWidth - scrollbarThumb.clientWidth;
    newLeft = Math.max(0, Math.min(newLeft, maxLeft));
    scrollbarThumb.style.left = `${newLeft}px`;

    // Sync image list scroll
    const scrollRatio = newLeft / maxLeft;
    imageList.scrollLeft = scrollRatio * (imageList.scrollWidth - imageList.clientWidth);
  });
  
  // DRAG-TO-SCROLL THE IMAGE LIST
  let isDraggingImages = false;
  let startXImages;
  let scrollLeftImages;

  imageList.addEventListener('mousedown', (e) => {
    isDraggingImages = true;
    imageList.style.cursor = 'grabbing';
    startXImages = e.pageX - imageList.offsetLeft;
    scrollLeftImages = imageList.scrollLeft;
  });

  imageList.addEventListener('mouseleave', () => {
    isDraggingImages = false;
    imageList.style.cursor = 'grab';
  });

  imageList.addEventListener('mouseup', () => {
    isDraggingImages = false;
    imageList.style.cursor = 'grab';
  });

  imageList.addEventListener('mousemove', (e) => {
    if (!isDraggingImages) return;
    e.preventDefault();
    const x = e.pageX - imageList.offsetLeft;
    const walk = (x - startXImages) * 2; // The *2 provides a faster scroll speed
    imageList.scrollLeft = scrollLeftImages - walk;
  });

  // Initialize thumb position
  window.addEventListener('load', updateThumbPosition);
  window.addEventListener('resize', updateThumbPosition);
});