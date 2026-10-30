<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPagesTest extends TestCase
{
    public function test_portfolio_pages_render_with_shared_navigation(): void
    {
        $pages = [
            'home' => ['uri' => '/', 'title' => 'Home'],
            'about' => ['uri' => '/about', 'title' => 'About'],
            'journey' => ['uri' => '/journey', 'title' => 'Journey'],
            'technology' => ['uri' => '/technology', 'title' => 'Technology'],
            'projects' => ['uri' => '/projects', 'title' => 'Projects'],
            'cv' => ['uri' => '/cv', 'title' => 'CV'],
            'gallery' => ['uri' => '/gallery', 'title' => 'Gallery'],
            'contact' => ['uri' => '/contact', 'title' => 'Contact'],
        ];

        foreach ($pages as $route => $page) {
            $response = $this->get($page['uri']);

            $response->assertOk()
                ->assertViewHas('title', $page['title'])
                ->assertSee('id="page-title"', false)
                ->assertSeeText($page['title'])
                ->assertSee('VICTOR EDWARD')
                ->assertSee('aria-label="Main navigation"', false)
                ->assertSee('aria-controls="primary-navigation"', false)
                ->assertSee('aria-current="page"', false)
                ->assertSee('class="back-to-top"', false)
                ->assertSee(route($route), false);

            $this->assertMatchesRegularExpression(
                '/<a\s+href="'.preg_quote(route($route), '/').'"\s+aria-current="page"/',
                $response->getContent(),
            );
        }
    }

    public function test_home_page_has_its_own_introduction_and_calls_to_action(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('A Journey of Becoming.')
            ->assertSee('Victor Edward, an AI and cybersecurity enthusiast')
            ->assertSee('AI and Cybersecurity Enthusiast')
            ->assertSee('images/gallery/personal-portraits/portrait-outdoors.jpeg')
            ->assertSee('loading="eager"', false)
            ->assertSee('fetchpriority="high"', false)
            ->assertDontSee('portrait will be added here')
            ->assertSee(route('cv'), false)
            ->assertSee(route('projects'), false)
            ->assertSee(route('journey'), false);
    }

    public function test_about_page_uses_only_provided_biographical_details(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('I completed my secondary school education at Mission and Cosmopolitan Schools.')
            ->assertSee('I served as a Timekeeper in the school prefect group.')
            ->assertSee('Artificial intelligence')
            ->assertSee('Software development')
            ->assertSee('Cybersecurity at FUTMINNA')
            ->assertSee('not an admission or completed qualification');
    }

    public function test_journey_page_covers_education_people_growth_and_future_ambition(): void
    {
        $this->get('/journey')
            ->assertOk()
            ->assertSee('Milestones, without the dates.')
            ->assertSee('Mission and Cosmopolitan Schools')
            ->assertSee('Friendships and the people who have influenced my journey')
            ->assertSee('contributed to my ongoing development')
            ->assertSee('Cybersecurity at the Federal University of Technology,')
            ->assertSee('This is an ambition for the future—not an admission');
    }

    public function test_technology_page_describes_interests_and_learning_without_unverified_credentials(): void
    {
        $this->get('/technology')
            ->assertOk()
            ->assertSee('Artificial intelligence')
            ->assertSee('Cybersecurity')
            ->assertSee('Ethical hacking')
            ->assertSee('Software development')
            ->assertSee('Learning and experimentation')
            ->assertSee('approximately five AI-related applications or systems')
            ->assertSee('Cisco Academy learning journey')
            ->assertSee('no certificate or course completion is claimed')
            ->assertSee('JARVIS 2.0')
            ->assertSee('not a completed assistant');
    }

    public function test_projects_page_only_lists_confirmed_project_details(): void
    {
        $this->get('/projects')
            ->assertOk()
            ->assertSee('JARVIS 2.0')
            ->assertSee('Concept / planned')
            ->assertSee('AI application experiments')
            ->assertSee('Experiments / prototypes')
            ->assertSee('not listed yet')
            ->assertSee('technologies, status and any public links have not been confirmed')
            ->assertDontSee('github.com/');
    }

    public function test_journey_page_includes_faith_as_a_personal_value(): void
    {
        $this->get('/journey')
            ->assertOk()
            ->assertSee('id="faith"', false)
            ->assertSee('My Christian faith and biblical principles')
            ->assertSee('purpose, discipline, growth and the values');
    }

    public function test_cv_page_only_uses_confirmed_details_and_can_be_printed_to_pdf(): void
    {
        $this->get('/cv')
            ->assertOk()
            ->assertSee('Victor Edward')
            ->assertSee('Career objective')
            ->assertSee('Mission and Cosmopolitan Schools')
            ->assertSee('Timekeeper')
            ->assertSee('Cybersecurity')
            ->assertSee('Cisco Academy')
            ->assertSee('No course completion or certification is claimed')
            ->assertSee('mailto:edwardvictor722@gmail.com')
            ->assertSee('https://www.linkedin.com/in/victor-edward-83b7613b8/')
            ->assertSee('https://wa.me/2347036959944')
            ->assertSee('data-print-cv', false)
            ->assertSee('Print / Save as PDF')
            ->assertSee('omits date of birth')
            ->assertDontSee('Date of birth');
    }

    public function test_contact_page_uses_only_provided_contact_details_and_discloses_form_status(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('Let’s connect.')
            ->assertSee('mailto:edwardvictor722@gmail.com')
            ->assertSee('edwardvictor722@gmail.com')
            ->assertSee('https://www.linkedin.com/in/victor-edward-83b7613b8/')
            ->assertSee('https://wa.me/2347036959944?text=Hello%20Victor%2C%20I%20visited%20your%20portfolio%20website%20and%20would%20like%20to%20connect%20with%20you.')
            ->assertSee('Message me on WhatsApp')
            ->assertSee('Connect on LinkedIn')
            ->assertSee('Victor Edward on LinkedIn (opens in a new tab)')
            ->assertSee('rel="noopener noreferrer"', false)
            ->assertSee('name="name"', false)
            ->assertSee('name="email"', false)
            ->assertSee('name="subject"', false)
            ->assertSee('name="message"', false)
            ->assertSee('type="email"', false)
            ->assertSee('required', false)
            ->assertSee('data-contact-form', false)
            ->assertSee('data-contact-submit disabled', false)
            ->assertSee('data-contact-status', false)
            ->assertSee('Messages are not sent.')
            ->assertDontSee('not been provided for publication yet')
            ->assertDontSee('Number not published');
    }

    public function test_gallery_page_displays_all_supplied_photos_and_slideshow_controls(): void
    {
        $photos = [
            'personal-portraits/portrait-outdoors.jpeg',
            'personal-portraits/portrait-selfie.jpeg',
            'technology-learning/laptop-learning-pair.jpeg',
            'technology-learning/computer-learning-session.jpeg',
            'technology-learning/laptop-learning.jpeg',
            'technology-learning/group-of-friends-outdoors.jpeg',
            'friends-connections/group-gathering.jpeg',
            'friends-connections/friends-portrait.jpeg',
            'friends-connections/friend-with-baby.jpeg',
            'christian-community/fellowship-group.jpeg',
            'christian-community/fellowship-pair.jpeg',
            'christian-community/fellowship-gathering.jpeg',
            'christian-community/fellowship-trio.jpeg',
            'family-memories/family-selfie.jpeg',
            'family-memories/family-selfie-portrait.jpeg',
            'family-memories/family-car-portrait.jpeg',
            'family-memories/family-car-pair.jpeg',
            'school-classmates/school-awards-group.jpeg',
            'school-classmates/school-classmates-pair.jpeg',
            'school-classmates/school-classmates-group.jpeg',
            'school-classmates/classmates-portrait.jpeg',
        ];

        $response = $this->get('/gallery');

        $response->assertOk()
            ->assertSee('data-gallery-slider', false)
            ->assertSee('data-gallery-previous', false)
            ->assertSee('data-gallery-next', false)
            ->assertSee('data-gallery-indicators', false)
            ->assertSee('data-gallery-show-slide="20"', false)
            ->assertSee('loading="lazy"', false)
            ->assertSee('decoding="async"', false)
            ->assertSee('The photographs in this collection were provided for publication.')
            ->assertSee('A woman holding a baby outdoors.')
            ->assertSee('A group portrait outside a building.')
            ->assertSee('technology-learning/group-of-friends-outdoors.jpeg')
            ->assertDontSee('family-memories/family-gathering-new.jpeg')
            ->assertDontSee('fellowship-placeholder.svg');

        $this->assertSame(21, preg_match_all('/data-gallery-slide\s+role="group"/', $response->getContent()));

        foreach ($photos as $photo) {
            $path = public_path('images/gallery/'.$photo);

            $this->assertFileExists($path);
            $this->assertStringContainsString($photo, $response->getContent());
            $this->assertStringStartsWith("\xFF\xD8\xFF", file_get_contents($path));
        }

    }
}
