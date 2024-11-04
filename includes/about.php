<?php
// Define the detailed biography using Heredoc syntax
$biography = <<<EOD
<h1>About</h1>

<h2>Biography of Dugald Steer</h2>

<h3>Early Life and Education</h3>

<p>Dugald A. Steer, born in 1965 in South London, is an English author and educator renowned for his contributions to children's fantasy literature. Growing up in Surrey, he developed a passion for storytelling and literature at an early age. Steer pursued higher education at the University of Bristol, where he earned a Bachelor of Arts degree, majoring in English literature and philosophy. After completing a TEFL (Teaching English as a Foreign Language) course, he moved to Spain and spent five years teaching English, immersing himself in the language and culture.</p>

<h3>Career</h3>

<p>Upon returning to the United Kingdom, Steer joined Templar Publishing as an editor. His dedication and talent saw him rise to the position of senior editor over a decade-long tenure. During his time at Templar, he played a pivotal role in both writing and editing a multitude of books, significantly shaping the company's literary offerings. Steer is best known for his work on the acclaimed 'Ology' series, which includes interactive and educational books that have captivated young readers worldwide.</p>

<p>After his successful stint at Templar Publishing, Steer transitioned to freelance work to focus on writing and teaching. He has authored over 100 books since his debut publication, "Big Bear and the Missing Mouse" in 1995. His writing is characterized by a blend of imaginative storytelling and educational content, often exploring mythical and fantastical themes.</p>

<h3>Notable Works</h3>

<p>Some of Dugald Steer's most prominent books include:</p>

<ul>
  <li>"Dragonology: The Complete Book of Dragons" (2003)</li>
  <li>"Egyptology: Search for the Tomb of Osiris" (2004)</li>
  <li>"Wizardology: The Book of the Secrets of Merlin" (2005)</li>
  <li>"Ghostology" (the latest installment in the 'Ology' series)</li>
</ul>

<p>His works are celebrated for their interactive elements, detailed illustrations, and the ability to engage readers in immersive worlds filled with dragons, wizards, and ancient myths.</p>

<h3>Teaching and Other Pursuits</h3>

<p>In addition to his writing career, Dugald Steer has continued his passion for education by teaching English in various locations, including London, Oxford, La Coruña, Seville, and near Barcelona. With over 15 years of teaching experience, he instructs both children and adults up to the C1 proficiency level, preparing students for exams like the Cambridge Advanced and IELTS. His lessons are known for being fun and engaging, emphasizing speaking skills and incorporating games. Steer also integrates technology into his teaching and has created a free resource website, <a href="https://www.esl-ology.com">esl-ology.com</a>, for teachers and students.</p>

<p>Steer's interest in technology extends to web development. He taught himself programming languages such as HTML, CSS, JavaScript, PHP, and MySQL during the pandemic lockdown. He has developed several websites, including his teaching site <a href="https://www.anglesmontalt.com">anglesmontalt.com</a>, and has a GitHub profile showcasing his projects.</p>

<h3>Translation Work</h3>

<p>Fluent in Spanish and Catalan, Dugald Steer has leveraged his language skills to undertake translation and editorial projects. His work includes translating and proofreading materials ranging from business websites and art catalogues to academic papers and thesis documents for institutions like the University of Vic's psychology department.</p>

<h3>Personal Life and Interests</h3>

<p>Steer's international experiences and fascination with mythology greatly influence his writing. He combines educational elements with fantasy to inspire and engage young readers. His enthusiasm for technology and artificial intelligence reflects his forward-thinking approach to both teaching and storytelling.</p>

<h3>Conclusion</h3>

<p>Dugald Steer's multifaceted career as an author, teacher, translator, and web developer highlights his dedication to education and storytelling. His contributions to children's literature, particularly the 'Ology' series, have left a lasting impact on readers around the world.</p>
EOD;
?>



<!-- New Section with Stacked Images and Text -->

<section id="about">

    <div id="me" class="text-content">
        <?php echo $biography; ?>

    </div>
    <div class="stacked-images">
        <img src="img/Drake.webp" class="hider" style="width: 100%;" alt=" as Dr. Ernest Drake">
        <div class="contact-form">
            <p>Get in Touch</p>
            <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect and sanitize the form data
        $name = filter_var($_POST['name'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $message = filter_var($_POST['message'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

        // Email details
        $to = "dugald@dugaldsteer.com";
        $subject = "Contact Form Submission from $name";
        $body = "You have received a new message from $name.\n\n".
                "Here is the message:\n$message";

        // Headers
        $headers = "From: $email";

        // Send email
        if (mail($to, $subject, $body, $headers)) {
            echo "<p style='color: green;'>Message successfully sent.</p>";
        } else {
            echo "<p style='color: red;'>Message sending failed. Please try again.</p>";
        }
    }

?>

            <form id="form-id" class="form-class" method="post" action="">

                <div class="form-group">
                    <label for="name" class="label">name</label>
                    <div class="input-group">
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" class="label">email</label>
                    <div class="input-group">
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="message" class="label">message</label>
                    <div class="input-group">
                        <textarea id="message" name="message" class="form-control" rows="6" maxlength="3000"
                            required></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" id="button" class="btn btn-primary btn-lg btn-block">Send
                        Message</button>
                </div>
            </form>
            <p>
            </p>

        </div>
    </div>

</section>
