export const profile = {
	fullName: 'Steve Tate',
	title: 'Professor of Computer Science',
	institute: 'UNC Greensboro',
	author_name: '', // Author name to be highlighted in the papers section
	research_areas: [
		// { title: 'Physics', description: 'Brief description of the research interest', field: 'physics' },
	    { title: 'Security', description: 'I am interested in how to design and build secure systems, with a particular interest in software security.', field: 'cs' },
	    { title: 'Cryptography', description: 'Cryptography protects information, but it goes beyond that. We can do a lot of things with cryptography that seem almost like magic -- I have invented novel cryptographic techniques, and new ways of reasoning about their security.', field: 'cs' },
	    { title: 'Algorithms', description: 'Anything we can compute, we do using an algorithm. How do we design and analyze algorithms? How can we prove they work correctly? How can we improve efficiency? These are all questions I have explored.', field: 'cs' },
],
}

// Set equal to an empty string to hide the icon that you don't want to display
export const social = {
	email: '',
	linkedin: '',
	x: '',
	github: '',
	gitlab: '',
	scholar: '',
	inspire: '',
	arxiv: '',
}

export const template = {
	website_url: 'https://localhost:4321', // Astro needs to know your site’s deployed URL to generate a sitemap. It must start with http:// or https://
	menu_left: false,
	transitions: true,
	lightTheme: 'light', // Select one of the Daisy UI Themes or create your own
	darkTheme: 'dark', // Select one of the Daisy UI Themes or create your own
	excerptLength: 200,
	postPerPage: 5,
    base: '' // Repository name starting with /
}

export const seo = {
	default_title: 'Home Page - Steve Tate',
	default_description: 'Astro Academia is a template for academic websites.',
	default_image: '/images/astro-academia.png',
}
