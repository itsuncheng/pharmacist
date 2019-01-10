# pharmacist

This is a microservice I made for our hackathon project at HackNTU 2017. We were building a web platform that helps the pharmacists to give the correct medicine to the patients using data retrieved from a huge medical database. Given that a patient has a certain disease, the online system will be able to deduce the most optimal medicine combinations through some data analysis. This will minimize or prevent doctor's mistakes, such as giving out certain medicines that will cause adverse side effects when used together.

This repo contains a functional website for uploading medical prescription. The uploaded prescription will go through the Microsoft Cognitive Services Image Recognition API and the medicine will be returned, which in turn, will be used to query the huge medical database for further data analysis.
