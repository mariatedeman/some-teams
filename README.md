# UEFA Women’s Champions League 2025 – Teams Presentation

This project is a website presenting the teams in the UEFA Women’s Champions League 2025. The site is built with PHP and uses data from an array to display teams, logos, rankings, and opponents.

## Features

- Overview of all participating teams
- Detail page for each team with logo, league, ranking, and link to the official website
- Display of each team’s opponents
- Responsive design for both desktop and mobile

## Technology

- PHP
- HTML/CSS
- No database – all data is stored in a PHP array

## Getting Started

1. Clone the project:
   ```
   git clone [repo-url]
   ```
2. Start a local PHP server in the project folder:
   ```
   php -S localhost:8000
   ```
3. Open `http://localhost:8000` in your web browser.

## Structure

- `index.php` – main page with team overview
- `teams-info.php` – team detail page
- `recources/data.php` – team data
- `components/` – header and footer
- `styles/style.css` – all CSS

## For Developers

- Add new teams in `recources/data.php`
- Change appearance in `styles/style.css`
- Requires PHP 7 or later

## License

MIT License