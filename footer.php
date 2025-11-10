<?php 
// =======================================================
// RE-DEFINE REQUIRED CONFIGURATION FOR FOOTER
// (Constants are redefined as config.php is not allowed)
// =======================================================
define('SITE_NAME', 'Verse and Chorus');
define('SITE_SLOGAN', 'Cinematic Songwriter and Lyricist');
define('SITE_OWNER', 'Kellie Larson');
define('SITE_PHONE', '760-537-0222');
define('SITE_EMAIL', 'info@verseandchorus.com');
define('CURRENT_YEAR', date('Y'));
?>
        </div>
    </main>
    <footer class="bg-[var(--burgundy)] py-6 mt-auto">
        <div class="content-container text-center text-sm text-gray-200">
            
            <p class="mb-0 w-fit mx-auto"><?php echo SITE_OWNER; ?></p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1 text-xs"><?php echo SITE_SLOGAN; ?></p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1"><?php echo SITE_PHONE; ?></p>
            <p class="mb-2 border-b border-gray-500 w-fit mx-auto pb-1">
                <a href="mailto:<?php echo SITE_EMAIL; ?>" class="link-orange hover:underline"><?php echo SITE_EMAIL; ?></a>
            </p>
            
            <p class="pt-2">
                <a href="/contact.html" class="link-orange hover:underline mx-2">Contact</a>
                <span class="mx-1">|</span>
                <a href="#" class="link-orange hover:underline mx-2">Terms</a>
            </p>

            <p class="mt-4 text-xs text-gray-400">&copy; <?php echo CURRENT_YEAR; ?> <?php echo SITE_NAME; ?></p>
        </div>
    </footer>

    <button id="back-to-top-btn" 
            class="fixed bottom-5 right-5 z-40 p-3 rounded-full 
                   btn-orange text-white shadow-lg 
                   transition-opacity duration-300 opacity-0 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>
    </button>

    <script>
        // Mobile Hamburger Menu Toggle
        document.getElementById('hamburger-menu').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
        });

        // Back to Top Button Logic
        const backToTopBtn = document.getElementById('back-to-top-btn');
        const scrollThreshold = 400; // Pixels to scroll before the button appears

        window.addEventListener('scroll', () => {
            if (window.scrollY > scrollThreshold) {
                backToTopBtn.classList.remove('opacity-0');
                backToTopBtn.classList.add('opacity-100');
            } else {
                backToTopBtn.classList.remove('opacity-100');
                backToTopBtn.classList.add('opacity-0');
            }
        });

        backToTopBtn.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>
