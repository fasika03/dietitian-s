# Dietcare Hub — Dietitian Website Template

A responsive, single-page website template for dietitians and nutrition coaches. Built with plain HTML/CSS — no build step, no dependencies.

**Practice:** Dietcare Hub — Gelila, RDN
**Contact channels wired in:** Telegram ([@DietitianGelila](https://t.me/DietitianGelila)), phone (+251 96 331 8288), Instagram, TikTok

## Sections

| Section | Purpose |
|---|---|
| Hero | Name, credentials, one-line value prop, primary CTA |
| About | Personal story, philosophy, credentials + a "Nutrition Facts"-styled trust panel |
| Services | Service cards with pricing and booking links |
| Content Hub | Placeholder cards for blog posts, recipes, and video content |
| Testimonials | Client quote cards |
| Social Proof Bar | Follower counts and media mentions |
| Free Resource | Lead magnet (downloadable guide) with email signup |
| Booking / Contact | Time-slot picker (mock) + contact form |
| Footer | Quick links, social icons, legal links |

<<<<<<< HEAD
## File structure

```
index.html   — page content and structure
style.css    — all styling
script.js    — mobile menu behavior
README.md    — this file
```

=======
>>>>>>> a086430f8e5309b0243161c26c6068c553fb446f
## Getting started

1. Clone the repo
2. Open `index.html` directly in a browser — no build tools needed
3. Edit content directly in the HTML (see "Customizing" below)

## Customizing

<<<<<<< HEAD
**Colors** — all defined as CSS variables at the top of `style.css`:
=======
**Colors** — all defined as CSS variables at the top of the `<style>` block:
>>>>>>> a086430f8e5309b0243161c26c6068c553fb446f
```css
:root{
  --ink: #2B2620;      /* body text */
  --paper: #F3E9CE;     /* background */
  --forest: #3A4A2E;    /* dark sections, primary brand color */
  --berry: #7A2E3D;     /* accent / CTAs */
  --sage: #6E8259;      /* secondary accent */
  --cream: #F6F1E0;     /* light text on dark backgrounds */
}
```
Change these and the whole site re-themes.

**Fonts** — loaded from Google Fonts: `Fraunces` (headings), `Work Sans` (body), `IBM Plex Mono` (labels/eyebrows).

**Content** — replace placeholder text directly in `index.html`:
- Name, bio, and credentials — `#about` section
- Services and pricing — `#services` section
- Testimonials — `.testimonials` section
- Blog/recipe/video cards — `#hub` section

## Still needs your real account details before launch

<<<<<<< HEAD
- [ ] **Backend email** — open `contact.php` and set `$recipient_email` to your real inbox (see "Backend (PHP)" below)
- [ ] **Booking calendar** — sign up at [calendly.com](https://calendly.com), replace `YOUR-CALENDLY-USERNAME` in the `#booking` section of `index.html`
=======
The template now uses real, free services — you just need to plug in your own account IDs:

- [ ] **Booking calendar** — sign up at [calendly.com](https://calendly.com), replace `YOUR-CALENDLY-USERNAME` in the `#booking` section
- [ ] **Contact form** — sign up at [formspree.io](https://formspree.io), replace `YOUR-FORM-ID` in the contact `<form>` in the `#booking` section
- [ ] **Email signup (lead magnet)** — create a second Formspree form (or connect Mailchimp/ConvertKit) and replace `YOUR-FORM-ID` in the `.signup-form`
>>>>>>> a086430f8e5309b0243161c26c6068c553fb446f
- [ ] **Real photo** — swap out the monogram placeholder in the hero
- [ ] **Social links** — footer icons currently point to `#`
- [ ] **Real testimonials, pricing, and blog/recipe content** — replace placeholder text throughout

<<<<<<< HEAD
## Architecture

**Frontend:** `index.html` + `style.css` + `script.js` — plain HTML/CSS/JS, no build step.
**Backend:** `contact.php` — handles the contact form and email signup form (detects which one was submitted).

Because the backend is PHP, this site needs a host that actually **runs PHP** — plain GitHub Pages will not work, since it only serves static files.

## Deploying (frontend + PHP backend together)

1. Choose a PHP-capable host — options include:
   - **Shared hosting**: Hostinger, Bluehost, DreamHost, Namecheap (cheap, beginner-friendly, cPanel-based)
   - **Free tier**: InfinityFree, 000webhost (fine for testing, less reliable for production)
   - **VPS**: DigitalOcean, Linode (more control, more setup)
2. Set `$recipient_email` in `contact.php` to your real inbox
3. Upload **all four files** (`index.html`, `style.css`, `script.js`, `contact.php`) to the same folder on your host — usually `public_html/` via FTP or the host's File Manager
4. Visit your domain — the site, the contact form, and the email signup should all work immediately (PHP `mail()` sends as soon as the form is submitted)
5. Connect a real domain name through your host's DNS settings if you haven't already

## React version (react-version/)

A component-based React port of the same site, built with [Vite](https://vitejs.dev). Same design, same content, same CSS — just restructured as reusable components with real form state handling.

**Setup:**
```bash
cd react-version
npm install
npm run dev
```
Then open the local URL Vite prints (usually `http://localhost:5173`).

**To build for production:**
```bash
npm run build
```
This outputs static files to `react-version/dist/` that you can deploy anywhere (Vercel, Netlify, GitHub Pages, etc.).

**Structure:**
```
react-version/
├── index.html          — Vite entry HTML
├── package.json
├── vite.config.js
└── src/
    ├── main.jsx         — React entry point
    ├── App.jsx          — all page components (Hero, About, Services, etc.)
    └── style.css        — shared styling (same as the plain HTML version)
```

Same placeholders apply here (Calendly username, Formspree form ID) — search for `YOUR-CALENDLY-USERNAME` and `YOUR-FORM-ID` inside `App.jsx`. Note: the React version's forms still point to Formspree by default (not `contact.php`) — if you want it to use the PHP backend instead, change the `fetch()` URLs in `App.jsx` from the Formspree endpoint to `contact.php` and host this build on the same PHP server.
=======
## Deploying with GitHub Pages

1. Push this repo to GitHub (make sure `index.html` is in the root)
2. Go to **Settings → Pages** in your repo
3. Under "Build and deployment", set **Source** to `Deploy from a branch`
4. Set **Branch** to `main` (or your default branch) and folder to `/ (root)`
5. Save — your site will be live at `https://<your-username>.github.io/<repo-name>/` within a minute or two

No build step needed since this is plain HTML/CSS.
>>>>>>> a086430f8e5309b0243161c26c6068c553fb446f

## License

Free to use and modify for your own practice or client projects.

<<<<<<< HEAD
Your local changes here
=======
Changes from GitHub here
>>>>>>> main
