<?php
  $home = "active"; 
  $pageTitle = "Home | PINK WEBSITE(DR.LUSIA)";
  include_once "head.php";   
?>
<!-- head end -->

  <body data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
    <div style="width: 100%; overflow: hidden">
      <!----------------------HEADER----------------------->

   <section>
      <?php include_once "header.php" ?>
   </section>

      <main>
        <!--------------------- MAIN-1------------------------->

   <div class="dental-container trsygrup-send">
  <div class="expert-content dr-control">
    <div class="expert-img gallery-set">
      <img
        src="data:image/svg+xml,%3csvg%20width='30'%20height='2'%20viewBox='0%200%2030%202'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cline%20y1='1'%20x2='30'%20y2='1'%20stroke='%23D521A0'%20stroke-width='2'/%3e%3c/svg%3e"
        alt=""
      />
      <div class="expert-heading-control">Dr Luisa Mateescu</div>
      <img
        src="data:image/svg+xml,%3csvg%20width='30'%20height='2'%20viewBox='0%200%2030%202'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cline%20y1='1'%20x2='30'%20y2='1'%20stroke='%23D521A0'%20stroke-width='2'/%3e%3c/svg%3e"
        alt=""
        style="margin-left: 1%"
      />
    </div>
  </div>
  <div class="dental-image dental-touch">
    <img
      src="/assets/a-images/dental-contain.png"
      alt="Dr Luisa examining a patient's teeth with dental tools"
    />
  </div>
  <div>
    <div class="Contact touch-flex-conent Contact-parts" >
      <div class="Contact-main10 testi-contact-main contact-touch">
        <div class="Contact-main-inside inside-bext-container">
          <div
            class="Contact-right-section left-testiii left-touch-setttt"
          >
            <form class="flex-form-content-set">
              <div class="form-container form-flex-touch">
                <div
                  class="form-flex-heading flex-heading-touch hmm-flex-head" id="form-flex-heading">
                  <h1>Get in Touch</h1>
                </div>
                <div class="form-paraa-flex flex-para-touch" id="form-paraa-flex ">
                  <p>
                    Simply complete the form and one of our team will
                    get in touch to help you get the smile you deserve.
                  </p>
                </div>
                <div class="flex-item-gallery-contained">
                  <div class="flex-item">
                    <div class="contact-right-label lable-setting label-div">
                      <label for="name">Full Name</label>
                    </div>
                    <div class="contact-right-input goooood input-div">
                      <input
                        type="text"
                        id="name"
                        name="user_name"
                        class="input-image-set"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="flex-item">
                    <div
                      class="contact-right-label lable-setting phone-max-flex label-div" id="label-div"
                    >
                      <label for="phone">Phone No.</label>
                    </div>
                    <div class="contact-right-input goooood input-div">
                      <input
                        type="text"
                        id="phone"
                        name="phone"
                        class="input-image-set2"
                        value=""
                      />
                    </div>
                  </div>
                </div>
                <div
                  class="flex-item-gallery-contained flex-touch-hmm-set"
                >
                  <div class="flex-item">
                    <div
                      class="contact-right-label lable-setting address-max email-fluxx label-div" 
                    >
                      <label for="email">Email Address</label>
                    </div>
                    <div class="contact-right-input goooood input-div">
                      <input
                        type="text"
                        id="email"
                        name="email"
                        class="input-image-set1"
                        value=""
                      />
                    </div>
                  </div>
                  <div class="flex-item">
                    <div
                      class="contact-right-label ok-labellll hmm-label settttt-label lable-label address-max label-div" 
                    >
                      <label for="practice" selected disabled="">
                        Which Practice would you like to be treatedat</label
                      >
                    </div>
                    <div class="custom-select2 custom-select3 input-div">
                      <select id="practice" name="practice" class="ddd">
                        <option value="" disabled="" hidden="">
                          Which Practice would you like to be treated at
                        </option>
                        <option value="All Saints Dental">
                          All Saints Dental
                        </option>
                        <option value="{my}dentist Kings Norton">
                          {my}dentist Kings Norton
                        </option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="flex-item flex-item-touch">
                  <div
                    class="contact-right-label ok-labellll hmm-label lable-label" id="label-div"
                  >
                    <label for="message"
                      >Please enter any additional comments</label
                    >
                  </div>
                  <textarea id="message" class="text-message" name="message"></textarea>
                </div>
              </div>
              <div class="form-container flex-flex">
                <div class="para-form2">
                  <div class="para-form-input">
                    <div class="input-checked">
                      <input
                        type="checkbox"
                        id="consentCheckbox"
                        class="custom-checkbox"
                      />
                    </div>
                    <div class="para-form2-content flex-flex" id="consent">
                      <p>
                        I consent to my personal data being collected
                        and stored as per the
                        <a
                          href="/privacypage"
                          style="text-decoration: none"
                          ><span style="color: rgb(213, 33, 160)"
                            >Privacy Policy.</span
                          >
                        </a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-button-gallery touch-button-flex">
                <button type="submit">Submit Form</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
   </div>       

   <div
  class="modal fade"
  id="staticBackdrop"
  data-bs-backdrop="static"
  data-bs-keyboard="false"
  tabindex="-1"
  aria-labelledby="staticBackdropLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">
          Validation Error
        </h1>
        <button
          type="button"
          class="btn-close"
          data-bs-dismiss="modal"
          aria-label="Close"
        ></button>
      </div>
      <div class="modal-body">
        <div
          id="error-name-required"
          class="validation-error"
          style="display: none"
        >
          Name is required
        </div>
        <div
          id="error-email-required"
          class="validation-error"
          style="display: none"
        >
          Email address is required
        </div>
        <div
          id="error-email-invalid"
          class="validation-error"
          style="display: none"
        >
          Please enter a valid email address
        </div>
        <div
          id="error-phone-required"
          class="validation-error"
          style="display: none"
        >
          Phone number is required
        </div>
        <div
          id="error-phone-invalid"
          class="validation-error"
          style="display: none"
        >
          Please enter a valid phone number
        </div>
        <div
          id="error-practice-required"
          class="validation-error"
          style="display: none"
        >
          Practice selection is required
        </div>
        <div
          id="error-message-required"
          class="validation-error"
          style="display: none"
        >
          Message is required
        </div>
        <div
          id="error-message-minlength"
          class="validation-error"
          style="display: none"
        >
          Message must be at least 10 characters long.
        </div>
        <div
          id="error-consent-required"
          class="validation-error"
          style="display: none"
        >
          You must consent to the privacy policy
        </div>
        <div
          id="success-message"
          class="validation-success"
          style="display: none"
        >
          Form submitted successfully!
        </div>
      </div>
      <div class="modal-footer">
        <button
          type="button"
          class="btn btn-secondary"
          data-bs-dismiss="modal"
        >
          Close
        </button>
      </div>
    </div>
  </div>
   </div>
         <!---------------------main2----------------------- -->
   <div class="church-container-church">
          <div class="church-container">
            <div class="church-main-heading">
              <h2>Where You Can Find Dr Luisa</h2>
            </div>
            <div class="church-cpntainer-contained-material">
              <div
                class="church-left aos-init aos-animate"
                data-aos="fade-right"
                data-aos-offset="200"
                data-aos-duration="600"
              >
                <div class="church-left-content church-content-control">
                  <div class="church-img">
                    <img src="/assets/a-images/logo-test.png" alt="" />
                  </div>
                  <div
                    class="church-heading-container church-heading-container-uffff-hmm"
                  >
                    <div class="church-heading">
                      <h3>{my}dentist Kings Norton</h3>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='iso-8859-1'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3c!DOCTYPE%20svg%20PUBLIC%20'-//W3C//DTD%20SVG%201.1//EN'%20'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3e%3csvg%20fill='%23000000'%20version='1.1'%20id='Capa_1'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20width='800px'%20height='800px'%20viewBox='0%200%20395.71%20395.71'%20xml:space='preserve'%3e%3cg%3e%3cpath%20d='M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738%20c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388%20C335.179,61.609,273.569,0,197.849,0z%20M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191%20c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z'/%3e%3c/g%3e%3c/svg%3e"
                          alt=""
                          class="phone-setttt"
                        />183 Redditch Rd, Kings Norton, Birmingham B38 8RH
                      </h4>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='utf-8'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3csvg%20fill='%23000000'%20width='800px'%20height='800px'%20viewBox='0%200%2032%2032'%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'%3e%3ctitle%3ephone%3c/title%3e%3cpath%20d='M0%2010.375c0%200.938%200.344%201.969%200.781%203.063s1%202.125%201.438%202.906c1.188%202.063%202.719%204.094%204.469%205.781s3.813%203.094%206.125%203.938c1.344%200.531%202.688%201.125%204.188%201.125%200.75%200%201.813-0.281%202.781-0.688%200.938-0.406%201.781-1.031%202.094-1.781%200.125-0.281%200.281-0.656%200.375-1.094%200.094-0.406%200.156-0.813%200.156-1.094%200-0.156%200-0.313-0.031-0.344-0.094-0.188-0.313-0.344-0.563-0.5-0.563-0.281-0.656-0.375-1.5-0.875-0.875-0.5-1.781-1.063-2.563-1.469-0.375-0.219-0.625-0.313-0.719-0.313-0.5%200-1.125%200.688-1.656%201.438-0.563%200.75-1.188%201.438-1.625%201.438-0.219%200-0.438-0.094-0.688-0.25s-0.5-0.281-0.656-0.375c-2.75-1.563-4.594-3.406-6.156-6.125-0.188-0.313-0.625-0.969-0.625-1.313%200-0.406%200.563-0.875%201.125-1.375%200.531-0.469%201.094-1.031%201.094-1.719%200-0.094-0.063-0.375-0.188-0.781-0.281-0.813-0.656-1.75-0.969-2.656-0.156-0.438-0.281-0.75-0.313-0.906-0.063-0.094-0.094-0.219-0.125-0.375s-0.094-0.281-0.125-0.406c-0.094-0.281-0.25-0.5-0.406-0.625-0.156-0.063-0.531-0.156-0.906-0.188-0.375%200-0.813-0.031-1-0.031-0.094%200-0.219%200-0.344%200.031h-0.406c-1%200.438-1.719%201.313-2.25%202.344-0.5%201.031-0.813%202.188-0.813%203.219z'%3e%3c/path%3e%3c/svg%3e"
                          alt=""
                          class="phone-set"
                        />01527 64727
                      </h4>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='utf-8'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3csvg%20width='800px'%20height='800px'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M3.0132%209.15129C3%209.69022%203%2010.3021%203%2011V13C3%2015.8284%203%2017.2426%203.87868%2018.1213C4.75736%2019%206.17157%2019%209%2019H15C17.8284%2019%2019.2426%2019%2020.1213%2018.1213C21%2017.2426%2021%2015.8284%2021%2013V11C21%2010.3021%2021%209.69022%2020.9868%209.15129L12.9713%2013.6044C12.3672%2013.9399%2011.6328%2013.9399%2011.0287%2013.6044L3.0132%209.15129ZM3.24297%207.02971C3.32584%207.05052%203.4074%207.08237%203.48564%207.12584L12%2011.856L20.5144%207.12584C20.5926%207.08237%2020.6742%207.05052%2020.757%207.02971C20.6271%206.55619%2020.4276%206.18491%2020.1213%205.87868C19.2426%205%2017.8284%205%2015%205H9C6.17157%205%204.75736%205%203.87868%205.87868C3.57245%206.18491%203.37294%206.55619%203.24297%207.02971Z'%20fill='%23222222'/%3e%3c/svg%3e"
                          alt=""
                          class="phone-set"
                        />hello@drluisa.co.uk
                      </h4>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='utf-8'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3csvg%20width='800px'%20height='800px'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='24'%20height='24'%20fill='white'/%3e%3ccircle%20cx='12'%20cy='12'%20r='9'%20stroke='%23000000'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3cpath%20d='M12%206V12L16.5%2016.5'%20stroke='%23000000'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e"
                          alt=""
                          class="phone-set"
                        />Mon - Fri: 9:00 AM - 5:00 PM
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
              <div
                class="church-right aos-init aos-animate"
                data-aos="fade-left"
                data-aos-offset="200"
                data-aos-duration="600"
              >
                <div class="church-left-content">
                  <div class="church-img">
                    <img src="/assets/a-images/logo-test.png" alt="" />
                  </div>
                  <div
                    class="church-heading-container church-heading-container-uffff"
                  >
                    <div class="church-heading">
                      <h3>All Saints Dental Clinic</h3>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='iso-8859-1'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3c!DOCTYPE%20svg%20PUBLIC%20'-//W3C//DTD%20SVG%201.1//EN'%20'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'%3e%3csvg%20fill='%23000000'%20version='1.1'%20id='Capa_1'%20xmlns='http://www.w3.org/2000/svg'%20xmlns:xlink='http://www.w3.org/1999/xlink'%20width='800px'%20height='800px'%20viewBox='0%200%20395.71%20395.71'%20xml:space='preserve'%3e%3cg%3e%3cpath%20d='M197.849,0C122.131,0,60.531,61.609,60.531,137.329c0,72.887,124.591,243.177,129.896,250.388l4.951,6.738%20c0.579,0.792,1.501,1.255,2.471,1.255c0.985,0,1.901-0.463,2.486-1.255l4.948-6.738c5.308-7.211,129.896-177.501,129.896-250.388%20C335.179,61.609,273.569,0,197.849,0z%20M197.849,88.138c27.13,0,49.191,22.062,49.191,49.191c0,27.115-22.062,49.191-49.191,49.191%20c-27.114,0-49.191-22.076-49.191-49.191C148.658,110.2,170.734,88.138,197.849,88.138z'/%3e%3c/g%3e%3c/svg%3e"
                          alt=""
                          class="phone-setttt"
                        />2D Vicarage Rd, King's Heath, Birmingham B14 7RA
                      </h4>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='utf-8'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3csvg%20fill='%23000000'%20width='800px'%20height='800px'%20viewBox='0%200%2032%2032'%20version='1.1'%20xmlns='http://www.w3.org/2000/svg'%3e%3ctitle%3ephone%3c/title%3e%3cpath%20d='M0%2010.375c0%200.938%200.344%201.969%200.781%203.063s1%202.125%201.438%202.906c1.188%202.063%202.719%204.094%204.469%205.781s3.813%203.094%206.125%203.938c1.344%200.531%202.688%201.125%204.188%201.125%200.75%200%201.813-0.281%202.781-0.688%200.938-0.406%201.781-1.031%202.094-1.781%200.125-0.281%200.281-0.656%200.375-1.094%200.094-0.406%200.156-0.813%200.156-1.094%200-0.156%200-0.313-0.031-0.344-0.094-0.188-0.313-0.344-0.563-0.5-0.563-0.281-0.656-0.375-1.5-0.875-0.875-0.5-1.781-1.063-2.563-1.469-0.375-0.219-0.625-0.313-0.719-0.313-0.5%200-1.125%200.688-1.656%201.438-0.563%200.75-1.188%201.438-1.625%201.438-0.219%200-0.438-0.094-0.688-0.25s-0.5-0.281-0.656-0.375c-2.75-1.563-4.594-3.406-6.156-6.125-0.188-0.313-0.625-0.969-0.625-1.313%200-0.406%200.563-0.875%201.125-1.375%200.531-0.469%201.094-1.031%201.094-1.719%200-0.094-0.063-0.375-0.188-0.781-0.281-0.813-0.656-1.75-0.969-2.656-0.156-0.438-0.281-0.75-0.313-0.906-0.063-0.094-0.094-0.219-0.125-0.375s-0.094-0.281-0.125-0.406c-0.094-0.281-0.25-0.5-0.406-0.625-0.156-0.063-0.531-0.156-0.906-0.188-0.375%200-0.813-0.031-1-0.031-0.094%200-0.219%200-0.344%200.031h-0.406c-1%200.438-1.719%201.313-2.25%202.344-0.5%201.031-0.813%202.188-0.813%203.219z'%3e%3c/path%3e%3c/svg%3e"
                          alt=""
                          class="phone-set"
                        />0121 444.0496
                      </h4>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='utf-8'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3csvg%20width='800px'%20height='800px'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cpath%20fill-rule='evenodd'%20clip-rule='evenodd'%20d='M3.0132%209.15129C3%209.69022%203%2010.3021%203%2011V13C3%2015.8284%203%2017.2426%203.87868%2018.1213C4.75736%2019%206.17157%2019%209%2019H15C17.8284%2019%2019.2426%2019%2020.1213%2018.1213C21%2017.2426%2021%2015.8284%2021%2013V11C21%2010.3021%2021%209.69022%2020.9868%209.15129L12.9713%2013.6044C12.3672%2013.9399%2011.6328%2013.9399%2011.0287%2013.6044L3.0132%209.15129ZM3.24297%207.02971C3.32584%207.05052%203.4074%207.08237%203.48564%207.12584L12%2011.856L20.5144%207.12584C20.5926%207.08237%2020.6742%207.05052%2020.757%207.02971C20.6271%206.55619%2020.4276%206.18491%2020.1213%205.87868C19.2426%205%2017.8284%205%2015%205H9C6.17157%205%204.75736%205%203.87868%205.87868C3.57245%206.18491%203.37294%206.55619%203.24297%207.02971Z'%20fill='%23222222'/%3e%3c/svg%3e"
                          alt=""
                          class="phone-set"
                        />hello@drluisa.co.uk
                      </h4>
                    </div>
                    <div class="img-heading-container">
                      <h4>
                        <img
                          src="data:image/svg+xml,%3c?xml%20version='1.0'%20encoding='utf-8'?%3e%3c!--%20Uploaded%20to:%20SVG%20Repo,%20www.svgrepo.com,%20Generator:%20SVG%20Repo%20Mixer%20Tools%20--%3e%3csvg%20width='800px'%20height='800px'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3crect%20width='24'%20height='24'%20fill='white'/%3e%3ccircle%20cx='12'%20cy='12'%20r='9'%20stroke='%23000000'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3cpath%20d='M12%206V12L16.5%2016.5'%20stroke='%23000000'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/svg%3e"
                          alt=""
                          class="phone-set"
                        />Mon - Fri: 9:00 AM - 5:00 PM
                      </h4>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
   </div>
          <!-- -----------------main3-------------------------->
    <div class="testimonial-container">
          <div class="test-container-full-contained">
            <div class="testi-full-container">
              <div class="testi-containerr-contained">
                <div class="testi-para">
                  <h2>People trust Dr. Luisa</h2>
                </div>
                <div class="testimon-para">
                  <p>
                    Have a look at the feedback from Dr Luisa’s patients
                    following their treatments.
                  </p>
                </div>
              </div>
              <div class="slider-container">
                <div class="gradiant1">
                  <div class="g-card1"></div>
                </div>
                <div class="slider-flex-main">
                  <div class="slider-flex">
                    <div class="owl-carousel owl-theme testimonials-carousel">
                      <div class="slider-item">
                        <div class="slider-img">
                          <img
                            src="/assets/a-images/rating.png"
                            alt="Review Rating Stars"
                          />
                        </div>
                        <div class="p-para-test">
                          <div class="p-para">
                            <p>
                              <span
                                >I took my very nervous 9 year old to this
                                dentist and she was absolutely brilliant. Showed
                                her everything she was doing and put her at
                                ease. I even managed to get her to go back and
                                see the same dentist for a temporary filling
                                which she would never normally agree to! Quite
                                pricey but don't mind paying the price for them
                                to be so kind and put my child at ease.<span
                                  style="color: white"
                                  >Lorem, ipsum dolor sit amet consectetur
                                  Lorem, ipsum dolor sit amet consectetur</span
                                >
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="left-section-content-test">
                          <div class="left-section-content-container-test">
                            <div class="le-test">
                              <div class="le-image-test">
                                <img
                                  src="/assets/a-images/img-testi2.svg"
                                  alt="Tony Dr Luisa's Restorative Dentistry Patient"
                                />
                              </div>
                            </div>
                            <div class="re-test">
                              <div class="re-heading-test">Tony</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-item">
                        <div class="slider-img">
                          <img
                            src="/assets/a-images/rating.png"
                            alt="Review Rating Stars"
                          />
                        </div>
                        <div class="p-para-test">
                          <div class="p-para">
                            <p>
                              <span
                                >I took my very nervous 9 year old to this
                                dentist and she was absolutely brilliant. Showed
                                her everything she was doing and put her at
                                ease. I even managed to get her to go back and
                                see the same dentist for a temporary filling
                                which she would never normally agree to! Quite
                                pricey but don't mind paying the price for them
                                to be so kind and put my child at ease.<span
                                  style="color: white"
                                  >Lorem, ipsum dolor sit amet consectetur
                                  Lorem, ipsum dolor sit amet consectetur</span
                                >
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="left-section-content-test">
                          <div class="left-section-content-container-test">
                            <div class="le-test">
                              <div class="le-image-test">
                                <img
                                  src="/assets/a-images/img-testi5.jpg"
                                  alt="Tony Dr Luisa's Restorative Dentistry Patient"
                                />
                              </div>
                            </div>
                            <div class="re-test">
                              <div class="re-heading-test">Anon</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-item">
                        <div class="slider-img">
                          <img
                            src="/assets/a-images/rating.png"
                            alt="Review Rating Stars"
                          />
                        </div>
                        <div class="p-para-test">
                          <div class="p-para">
                            <p>
                              <span
                                >Two fillings today. No local at my request,
                                didn’t feel a thing. Luisa and nurse very
                                mindful of my disability and issues with
                                swallowing and fear of choking. Couldn’t have
                                had better treatment.
                                <span style="color: white"
                                  >Lorem, ipsum dolor sit amet consectetur
                                  adipisicing elit. Hic perspiciatis fugiat
                                  aliquam quia reprehenderit perferendis iure
                                  dolor sit quis iusto! aliquam quia
                                  reprehenderit perferendis iure dolor sit quis
                                  iusto! perferendis iure dolor sit quis
                                  iusto!</span
                                ></span
                              >
                            </p>
                          </div>
                        </div>
                        <div class="left-section-content-test">
                          <div class="left-section-content-container-test">
                            <div class="le-test">
                              <div class="le-image-test">
                                <img
                                  src="/assets/a-images/img-testi2.svg"
                                  alt="Tony Dr Luisa's Restorative Dentistry Patient"
                                />
                              </div>
                            </div>
                            <div class="re-test">
                              <div class="re-heading-test">Tony</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-item">
                        <div class="slider-img">
                          <img
                            src="/assets/a-images/rating.png"
                            alt="Review Rating Stars"
                          />
                        </div>
                        <div class="p-para-test">
                          <div class="p-para">
                            <p>
                              <span
                                >I took my very nervous 9 year old to this
                                dentist and she was absolutely brilliant. Showed
                                her everything she was doing and put her at
                                ease. I even managed to get her to go back and
                                see the same dentist for a temporary filling
                                which she would never normally agree to! Quite
                                pricey but don't mind paying the price for them
                                to be so kind and put my child at ease.<span
                                  style="color: white"
                                  >Lorem, ipsum dolor sit amet consectetur
                                  Lorem, ipsum dolor sit amet consectetur</span
                                >
                              </span>
                            </p>
                          </div>
                        </div>
                        <div class="left-section-content-test">
                          <div class="left-section-content-container-test">
                            <div class="le-test">
                              <div class="le-image-test">
                                <img
                                  src="/assets/a-images/img-testi2.svg"
                                  alt="Tony Dr Luisa's Restorative Dentistry Patient"
                                />
                              </div>
                            </div>
                            <div class="re-test">
                              <div class="re-heading-test">Tony</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="slider-item">
                        <div class="slider-img">
                          <img
                            src="/assets/a-images/rating.png"
                            alt="Review Rating Stars"
                          />
                        </div>
                        <div class="p-para-test">
                          <div class="p-para">
                            <p>
                              <span>
                                Tooth extraction for my child was very smooth
                                and made my child very comfortable.<span
                                  style="color: white"
                                  >Lorem, ipsum dolor sit amet consectetur
                                  adipisicing elit. Hic perspiciatis fugiat
                                  aliquam quia reprehenderit perferendis iure
                                  dolor sit quis iusto! aliquam quia
                                  reprehenderit perferendis iure dolor sit quis
                                  iusto! perferendis iure dolor sit quis iusto!
                                  aliquam quia reprehenderit perferendis iure
                                  dolor sit quis iusto! aliquam quia
                                  reprehenderit</span
                                ></span
                              >
                            </p>
                          </div>
                        </div>
                        <div class="left-section-content-test">
                          <div class="left-section-content-container-test">
                            <div class="le-test">
                              <div class="le-image-test">
                                <img
                                  src="/assets/a-images/img testi7.svg"
                                  alt="Tony Dr Luisa's Restorative Dentistry Patient"
                                />
                              </div>
                            </div>
                            <div class="re-test">
                              <div class="re-heading-test">J Liza</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="custom-arrows-contained">
                  <div class="custom-arrows">
                    <div class="custom-arrow custom-prev testimonials-prev-btn">
                      <img
                        src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cg%20clip-path='url(%23clip0_0_164)'%3e%3cpath%20d='M5%2012H19'%20stroke='%23333333'%20stroke-width='1.5'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3cpath%20d='M15%2016L19%2012'%20stroke='%23333333'%20stroke-width='1.5'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3cpath%20d='M15%208L19%2012'%20stroke='%23333333'%20stroke-width='1.5'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0_0_164'%3e%3crect%20width='24'%20height='24'%20fill='white'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e"
                        alt="Pre"
                      />
                    </div>
                    <div
                      class="custom-arrow custom-next active testimonials-next-btn"
                    >
                      <img
                        src="data:image/svg+xml,%3csvg%20width='24'%20height='24'%20viewBox='0%200%2024%2024'%20fill='none'%20xmlns='http://www.w3.org/2000/svg'%3e%3cg%20clip-path='url(%23clip0_0_170)'%3e%3cpath%20d='M19%2012H5'%20stroke='%23333333'%20stroke-width='1.5'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3cpath%20d='M9%2016L5%2012'%20stroke='%23333333'%20stroke-width='1.5'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3cpath%20d='M9%208L5%2012'%20stroke='%23333333'%20stroke-width='1.5'%20stroke-linecap='round'%20stroke-linejoin='round'/%3e%3c/g%3e%3cdefs%3e%3cclipPath%20id='clip0_0_170'%3e%3crect%20width='24'%20height='24'%20fill='white'%20transform='matrix(-1%200%200%201%2024%200)'/%3e%3c/clipPath%3e%3c/defs%3e%3c/svg%3e"
                        alt="Next"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>

      </main> 

       <section>
        <?php include_once "footer.php" ?>
      </section>

    <!--  -->
  </body>
</html>
