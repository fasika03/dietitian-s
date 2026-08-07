# Root & Rise Nutrition — Dietitian Website Template

A responsive, single-page website template for dietitians and nutrition coaches. Built with plain HTML/CSS — no build step, no dependencies.

**Live example content:** Gelila, RDN — a fictional nutrition coaching practice used to demo the layout.

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

## Still needs to be wired up before launch

This template ships with **static placeholders** for anything that requires a backend:

- [ ] **Booking calendar** — replace the mock time-slot list with an embedded Calendly, Acuity, or Cal.com widget
- [ ] **Contact form** — connect to a form backend (e.g. Formspree, Netlify Forms) so submissions actually send
- [ ] **Email signup** — connect to an email service (Mailchimp, ConvertKit, etc.) for the lead magnet
- [ ] **Real photo** — swap out the monogram placeholder in the hero
- [ ] **Social links** — footer icons currently point to `#`

## License

Free to use and modify for your own practice or client projects.
