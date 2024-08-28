<?php get_header()?>

<section class="contactPage bg--primary">
      <div class="container">
        <div class="contactPage__wrapper">
          <ul class="contactPage__info">
            <li>
              <i class="fa-solid fa-phone-volume"></i>
              <span><?php echo get_post_meta(get_the_ID(), 'Phone', true)?></span>
            </li>
            <li>
              <i class="fa-solid fa-location-dot"></i>
              <span
                ><?php echo get_post_meta(get_the_ID(), 'Address', true)?></span
              >
            </li>
            <li>
              <i class="fa-solid fa-earth-americas"></i>
              <span><?php echo get_post_meta(get_the_ID(), 'Email', true)?></span>
            </li>
          </ul>
          <iframe
            src="<?php echo get_post_meta(get_the_ID(), 'Map', true)?>"
            width="1050"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
          <h2>Get In Touch</h2>
          <h4>Make it happen in 4 easy steps! Best of Luck</h4>
          <form class="contactPage__input">
            <div class="contactPage__input--name">
              <label for="firstname"
                ><p>First Name</p>
                <input type="text" id="firstname"
              /></label>
              <label for="lastname"
                ><p>Last Name</p>
                <input type="text" id="lastname"
              /></label>
            </div>
            <label for="email"
              ><p>Email</p>
              <input type="email" id="email"
            /></label>
            <label for="subject"
              ><p>Subject</p>
              <input type="text" id="subject"
            /></label>
            <label for="message"
              ><p>Your Message</p>
              <textarea id="message"></textarea>
            </label>
            <div class="contactPage__input--btn mt--2">
              <a href="" class="btn bg--secondary">Submit Form</a>
            </div>
          </form>
        </div>
      </div>
    </section>

<?php get_footer()?>