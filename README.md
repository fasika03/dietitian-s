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

## Getting started

1. Clone the repo
2. Open `index.html` directly in a browser — no build tools needed
3. Edit content directly in the HTML (see "Customizing" below)

## Customizing

**Colors** — all defined as CSS variables at the top of the `<style>` block:
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

The template now uses real, free services — you just need to plug in your own account IDs:

- [ ] **Booking calendar** — sign up at [calendly.com](https://calendly.com), replace `YOUR-CALENDLY-USERNAME` in the `#booking` section
- [ ] **Contact form** — sign up at [formspree.io](https://formspree.io), replace `YOUR-FORM-ID` in the contact `<form>` in the `#booking` section
- [ ] **Email signup (lead magnet)** — create a second Formspree form (or connect Mailchimp/ConvertKit) and replace `YOUR-FORM-ID` in the `.signup-form`
- [ ] **Real photo** — swap out the monogram placeholder in the hero
- [ ] **Social links** — footer icons currently point to `#`
- [ ] **Real testimonials, pricing, and blog/recipe content** — replace placeholder text throughout

## Deploying with GitHub Pages

1. Push this repo to GitHub (make sure `index.html` is in the root)
2. Go to **Settings → Pages** in your repo
3. Under "Build and deployment", set **Source** to `Deploy from a branch`
4. Set **Branch** to `main` (or your default branch) and folder to `/ (root)`
5. Save — your site will be live at `https://<your-username>.github.io/<repo-name>/` within a minute or two

No build step needed since this is plain HTML/CSS.

## License

Free to use and modify for your own practice or client projects.