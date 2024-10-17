# StreamPlus Web Application

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Table of Contents

- [Introduction](#introduction)
- [Features](#features)
- - [Calculating Monthly Payments](#calculating-monthly-payments)
- [Getting Started](#getting-started)
    - [Prerequisites](#prerequisites)
    - [Installation](#installation)
    - [Setting Up with Laravel Sail](#setting-up-with-laravel-sail)
- [Usage](#usage)
- - [Inputting Loan Details](#inputting-loan-details)
- [Generating Amortization Schedules](#generating-amortization-schedules)
- [Applying Extra Repayments](#applying-extra-repayments)
- [API Endpoints](#api-endpoints)
- [Controllers and Services](#controllers-and-services)
- [Models and Migrations](#models-and-migrations)
- [Contributing](#contributing)
- [License](#license)

## Introduction

This is a multi-step onboarding form developed using Laravel. It allows users to fill out their information in a structured manner, improving the overall user experience. The form collects user information, address details, and payment information (if applicable) in a step-by-step format.

## Features

- **User Information Collection**: Collects name, email, and phone number.
- **Address Information**: Gathers the user's address details across multiple fields.
- **Conditional Payment Step**: Displays payment information fields based on the selected subscription type.
- **Real-time Validation**: Validates input fields on blur events, providing immediate feedback.
- **Error Handling**: Displays error messages and highlights invalid fields.
- **Responsive Design**: Works well on both desktop and mobile devices.


## Getting Started

### Prerequisites

- Download & install Docker on for your machine

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/usmyum/stream-plus
   cd stream-plus
   ```
   
Copy the env file as:

   ```bash
   cp .env.example .env
   ```
Checkout to the feature branch

   ```bash
   git checkout feature/on-boarding-process
   ```

### Setting Up with Docker

1. Simply run the command

   ```bash
   docker-compose up --build
   ```

## Usage

1. Run the command to list docker containers

   ```bash
   docker ps
   ```
You can see all the running containers in here

2. Run the laravel container named, 'dashing-assessment-laravel.test-1' as follows:

   ```bash
   docker exec -it dashing-assessment-laravel.test-1 bash
   ```

3. Run the migrations with the command

   ```bash
   php artisan migrate
   ```

If you come accross any failure in migrations or testing, please consider changing the DB_HOST value in the .env

   ```bash
   DB_HOST=mysql OR DB_HOST=127.0.0.1
   ```


## Endpoints

- **GET** `/welcome`
  a welcome screen with brief introduction about the application

- **GET** `/loan/{id}`
  view a loan setup, amortization and repayment schedule

- **POST** `/loan`
  Store a loan setup, amortization and repayment schedule

- **Delete** `/loan`
  Delete a loan setup, amortization and repayment schedule


### Inputting Loan Details

1. Access the web application by navigating to `http://localhost` in your browser.
2. Input loan details like loan amount, interest rate, and loan term.

### Generating Amortization Schedules

1. Calculate monthly mortgage payment and generate an amortization schedule.

### Applying Extra Repayments

1. Optionally, apply fixed extra repayments to observe recalculated schedules.

## Controllers and Services

The application uses controllers and services to handle logic and interactions.

## Models and Migrations

The application uses models and migrations to define data structure and manage the database.

## Contributing

Contributions are welcome! Fork the repository and create pull requests with your proposed changes.
