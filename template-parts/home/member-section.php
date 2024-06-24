<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */

?>


<section id="member-section" class="member-container">
	<div class="member-section-wrapper">
		<div class="gradient-background-v2">
			<div></div>
			<div></div>
		</div>
		<div class="circle-container-v2 responsive">
			<div class="title-circle-1"></div>
			<div class="title-circle-2 text-uppercase section-name">
				our members
			</div>
		</div>
		<div class="member-title-section">
			<p class="title text-uppercase">quality, collaboration, innovation:<br>meet the team behind your next big
				leap
			</p>
		</div>
		<div id="skills-slider" class="skills-section">
			<div class="skills-item" id="skills-item1">
				<div class="skills-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/security-system.png" alt="">
				</div>
				<p class="skills-title text-uppercase">quality</p>
				<p class="skills-description">We hold our work to the highest standards, ensuring every project meets
					rigorous benchmarks for excellence. This commitment means we deliver not just what's expected, but
					exceptional results that truly set your brand apart.</p>
			</div>
			<div class="skills-item" id="skills-item2">
				<div class="skills-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/workgroup.png" alt="">
				</div>
				<p class="skills-title text-uppercase">collaboration</p>
				<p class="skills-description">Our approach is hands-on and inclusive, involving clients at every step.
					We
					build strategies together, combining your insights with our expertise to create impactful, tailored
					solutions. True collaboration leads to more effective outcomes and builds lasting partnerships.​</p>
			</div>
			<div class="skills-item" id="skills-item3">
				<div class="skills-icon">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/rocket.png" alt="">
				</div>
				<p class="skills-title text-uppercase">innovation</p>
				<p class="skills-description">We constantly explore new ideas and technologies to keep your strategies
					fresh
					and effective. By adopting innovative approaches, we not only keep up with industry trends but often
					set
					them, ensuring your brand stays relevant and competitive.​</p>
			</div>
		</div>
		<div class="slider-btns">
			<button class="slider-btn active" data-target="skills-item1"></button>
			<button class="slider-btn" data-target="skills-item2"></button>
			<button class="slider-btn" data-target="skills-item3"></button>
		</div>
		<div class="member-list">
			<div class="member-list-grid" id="member-slider">
				<div class="member-item" id="member-item1" data-experience="Our Founder combines over 7 years of expertise in digital marketing, mar-tech, and
								business
								operations. His leadership is rooted in experience with technology startups and digital
								agencies, emphasizing strong management, training capabilities, driving business
								success.​">
					<div class="member-image">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/home/member/profile-pic_Son.png"
							alt="">
					</div>
					<div class="member-desc">
						<div class="member-intro">
							<span class="member-name">Son Nguyen</span>
							<span class="member-title">Founder</span>
							<!-- <p class="member-exp">
								Our Founder combines over 7 years of expertise in digital marketing, mar-tech, and
								business
								operations. His leadership is rooted in experience with technology startups and digital
								agencies, emphasizing strong management, training capabilities, driving business
								success.​
							</p> -->
						</div>

					</div>
				</div>
				<div class="member-item" id="member-item2" data-experience="Our Client Relationship Manager offers 7 years of expertise in digital marketing and
								brand
								building. Having worked on both agency and client sides, he excels in fostering strong
								relationships and managing client needs effectively.​​">
					<div class="member-image">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/home/member/profile-pic_Khoi.png"
							alt="">
					</div>
					<div class="member-desc">
						<div class="member-intro">
							<span class="member-name">Khoi Tran</span>
							<span class="member-title">Client Relationships</span>
							<!-- <p class="member-exp">
								Our Client Relationship Manager offers 7 years of expertise in digital marketing and
								brand
								building. Having worked on both agency and client sides, he excels in fostering strong
								relationships and managing client needs effectively.​​
							</p> -->
						</div>

					</div>
				</div>
				<div class="member-item" id="member-item3" data-experience="With 7 years of experience in marketing and extensive portfolio across various
								industries, our
								IMC Planning Manager excels in crafting comprehensive media communication and social
								strategies
								that enhances brand-customer relationships.​">
					<div class="member-image">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/home/member/profile-pic_Thu.png"
							alt="">
					</div>
					<div class="member-desc">
						<div class="member-intro">
							<span class="member-name">Thu Nguyen</span>
							<span class="member-title">Integrated Planning</span>
							<!-- <p class="member-exp">
								With 7 years of experience in marketing and extensive portfolio across various
								industries, our
								IMC Planning Manager excels in crafting comprehensive media communication and social
								strategies
								that enhances brand-customer relationships.​
							</p> -->
						</div>

					</div>
				</div>
				<div class="member-item" id="member-item4" data-experience="Bringing 12 years of experience in marketing, our Industry Advisor is skilled in
								navigating both
								client and agency landscapes. His comprehensive knowledge in business operations and
								team
								management ensures effective processes and development.​">
					<div class="member-image">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/home/member/profile-pic_Trong.png"
							alt="">
					</div>
					<div class="member-desc">
						<div class="member-intro">
							<span class="member-name">Trong Nguyen</span>
							<span class="member-title">Industry Advisor</span>
							<!-- <p class="member-exp">
								Bringing 12 years of experience in marketing, our Industry Advisor is skilled in
								navigating both
								client and agency landscapes. His comprehensive knowledge in business operations and
								team
								management ensures effective processes and development.​
							</p> -->
						</div>

					</div>
				</div>
				<div class="member-item" id="member-item5" data-experience="With 14 years of technical expertise and leadership roles including CEO and CTO in
								multinational
								companies and startups, our Technology Advisor excels in creating robust solutions
								tailored for
								ad-tech and mar-tech, understanding deeply the challenges businesses face.​">
					<div class="member-image">
						<img src="<?php echo get_template_directory_uri(); ?>/src/images/home/member/profile-pic_Hien.png"
							alt="">
					</div>
					<div class="member-desc">
						<div class="member-intro">
							<span class="member-name">Hien Le</span>
							<span class="member-title">Technology Advisor</span>
							<!-- <p class="member-exp">
								With 14 years of technical expertise and leadership roles including CEO and CTO in
								multinational
								companies and startups, our Technology Advisor excels in creating robust solutions
								tailored for
								ad-tech and mar-tech, understanding deeply the challenges businesses face.​
							</p> -->
						</div>

					</div>
				</div>
			</div>

			<div id="experienceModal" class="modal-wrapper hide">
				<div class="modal modal-medium">
					<div class="modal-content">
						<span class="close">&times;</span>
						<span class="modal-member-name"></span>
						<span class="modal-member-title"></span>
						<p id="experienceText"></p>
					</div>
				</div>
			</div>
			<!-- <div class="member-slider-btns">
				<button class="member-slider-btn active" data-target="member-item1"></button>
				<button class="member-slider-btn" data-target="member-item2"></button>
				<button class="member-slider-btn" data-target="member-item3"></button>
				<button class="member-slider-btn" data-target="member-item4"></button>
				<button class="member-slider-btn" data-target="member-item5"></button>
			</div> -->
		</div>
	</div>
</section>