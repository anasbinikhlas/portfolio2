<!DOCTYPE html>
<html lang="en" x-data="{ open: false, scrolled: false }" @scroll.window="scrolled = window.pageYOffset > 50">
<head>
    <meta charset="UTF-8">
    <title>Anas Bin Ikhlas - Full Stack Developer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    
    <style>
        .scroll-animation {
            animation: scroll 20s linear infinite;
        }
        
        @keyframes scroll {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        
        .project-card {
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        .big-name {
            font-size: clamp(4rem, 15vw, 12rem);
            line-height: 0.8;
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Fixed Navigation -->
    <nav :class="scrolled ? 'bg-white shadow-lg' : 'bg-transparent'" 
         class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <!-- Hamburger Menu -->
            <button @click="open = !open" 
                    :class="scrolled || open ? 'text-gray-800' : 'text-white'"
                    class="text-2xl hover:text-blue-600 transition-colors z-50 relative">
                <span x-show="!open">☰</span>
                <span x-show="open" class="text-3xl">✕</span>
            </button>
            
            <!-- Center Name -->
            <div class="absolute left-1/2 transform -translate-x-1/2">
                <span :class="scrolled || open ? 'text-gray-800' : 'text-white'" 
                      class="font-bold text-xl transition-colors">Anas Bin Ikhlas</span>
            </div>
            
            <!-- Let's Connect Button -->
            <a href="#contact" 
               class="bg-blue-600 text-white px-6 py-2 rounded-full text-sm hover:bg-blue-700 transition-colors">
                Let's Connect
            </a>
        </div>
    </nav>

    <!-- Slide-Out Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform -translate-x-full"
         x-transition:enter-end="opacity-100 transform translate-x-0"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform translate-x-0"
         x-transition:leave-end="opacity-0 transform -translate-x-full"
         class="fixed inset-0 bg-white flex flex-col items-center justify-center space-y-8 text-2xl z-40">
        
        <a href="#about" @click="open = false" class="hover:text-blue-600 transition-colors">About</a>
        <a href="#skills" @click="open = false" class="hover:text-blue-600 transition-colors">Skills</a>
        <a href="#projects" @click="open = false" class="hover:text-blue-600 transition-colors">Projects</a>
        <a href="#experience" @click="open = false" class="hover:text-blue-600 transition-colors">Experience</a>
        <a href="#education" @click="open = false" class="hover:text-blue-600 transition-colors">Education</a>
        <a href="#certifications" @click="open = false" class="hover:text-blue-600 transition-colors">Certifications</a>
        <a href="#contact" @click="open = false" class="hover:text-blue-600 transition-colors">Contact</a>
    </div>

    <!-- 1. Landing Section -->
    <section id="home" class="min-h-screen bg-gradient-to-br from-blue-900 via-purple-900 to-gray-900 flex items-center justify-center text-white relative overflow-hidden">
        <div class="absolute inset-0 bg-black opacity-20"></div>
        <div class="container mx-auto px-6 text-center relative z-10">
            <h1 class="big-name font-black text-white mb-8 animate-pulse">
                ANAS BIN IKHLAS
            </h1>
            <p class="text-2xl md:text-3xl mb-8 text-gray-200">
                Full Stack Developer
            </p>
            <p class="text-lg md:text-xl max-w-3xl mx-auto text-gray-300">
                Crafting digital experiences with modern technologies
            </p>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <div class="w-6 h-10 border-2 border-white rounded-full flex justify-center">
                <div class="w-1 h-3 bg-white rounded-full mt-2"></div>
            </div>
        </div>
    </section>

    <!-- 2. About Section -->
    <section id="about" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <!-- Left - Image -->
                <div data-aos="fade-right" class="text-center">
                    <div class="w-80 h-80 mx-auto rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ asset('images/anas2.jpeg') }}" 
                            alt="Anas Bin Ikhlas" 
                            class="w-full h-full object-cover">
                    </div>
                </div>
                
                <!-- Right - About Text -->
                <div data-aos="fade-left" class="space-y-6">
                    <h2 class="text-4xl font-bold text-gray-900">About Me</h2>
                    <div class="space-y-4 text-lg text-gray-600 leading-relaxed">
                        <p>
                            I'm a passionate Full Stack Developer with over 5 years of experience 
                            creating digital solutions that make a difference. My journey in tech 
                            started with curiosity and has evolved into a deep expertise in modern 
                            web technologies.
                        </p>
                        <p>
                            I specialize in React, Node.js, Laravel, and cloud technologies. 
                            My approach combines technical excellence with creative problem-solving 
                            to deliver exceptional user experiences.
                        </p>
                        <p>
                            When I'm not coding, I'm exploring new technologies, contributing to 
                            open-source projects, or mentoring aspiring developers in the community.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Skills Section -->
    <section id="skills" class="py-20 bg-gray-900 text-white overflow-hidden">
        <div class="container mx-auto px-6 mb-12">
            <h2 class="text-6xl font-bold text-center mb-8" data-aos="fade-up">Skills</h2>
        </div>
        
        <!-- First scrolling line -->
        <div class="mb-8">
            <div class="flex space-x-8 scroll-animation">
                <span class="text-6xl font-bold text-blue-400 whitespace-nowrap">REACT</span>
                <span class="text-6xl font-bold text-green-400 whitespace-nowrap">NODE.JS</span>
                <span class="text-6xl font-bold text-red-400 whitespace-nowrap">LARAVEL</span>
                <span class="text-6xl font-bold text-yellow-400 whitespace-nowrap">JAVASCRIPT</span>
                <span class="text-6xl font-bold text-purple-400 whitespace-nowrap">PHP</span>
                <span class="text-6xl font-bold text-pink-400 whitespace-nowrap">MONGODB</span>
                <span class="text-6xl font-bold text-cyan-400 whitespace-nowrap">MYSQL</span>
            </div>
        </div>
        
        <!-- Second scrolling line (reverse direction) -->
        <div>
            <div class="flex space-x-8" style="animation: scroll 25s linear infinite reverse;">
                <span class="text-6xl font-bold text-indigo-400 whitespace-nowrap">HTML5</span>
                <span class="text-6xl font-bold text-orange-400 whitespace-nowrap">CSS3</span>
                <span class="text-6xl font-bold text-teal-400 whitespace-nowrap">TAILWIND</span>
                <span class="text-6xl font-bold text-rose-400 whitespace-nowrap">BOOTSTRAP</span>
                <span class="text-6xl font-bold text-emerald-400 whitespace-nowrap">GIT</span>
                <span class="text-6xl font-bold text-violet-400 whitespace-nowrap">DOCKER</span>
                <span class="text-6xl font-bold text-amber-400 whitespace-nowrap">AWS</span>
            </div>
        </div>
    </section>

    <!-- 4. Projects Section -->
    <section id="projects" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-6xl font-bold text-center text-gray-900 mb-16" data-aos="fade-up">Featured Projects</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="100">
                    <div class="h-48 bg-gradient-to-br from-blue-500 to-purple-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">E-Commerce Platform</h3>
                        <p class="text-gray-600 mb-4">Full-stack e-commerce solution built with React and Laravel</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">React</span>
                            <span class="px-3 py-1 bg-red-100 text-red-600 text-sm rounded-full">Laravel</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="200">
                    <div class="h-48 bg-gradient-to-br from-green-500 to-teal-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Task Management App</h3>
                        <p class="text-gray-600 mb-4">Real-time collaboration tool with Node.js and MongoDB</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Node.js</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">MongoDB</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="300">
                    <div class="h-48 bg-gradient-to-br from-purple-500 to-pink-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Analytics Dashboard</h3>
                        <p class="text-gray-600 mb-4">Data visualization dashboard with React and D3.js</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">React</span>
                            <span class="px-3 py-1 bg-purple-100 text-purple-600 text-sm rounded-full">D3.js</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="400">
                    <div class="h-48 bg-gradient-to-br from-yellow-500 to-orange-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Social Media Platform</h3>
                        <p class="text-gray-600 mb-4">Full-featured social platform with real-time messaging</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-yellow-100 text-yellow-600 text-sm rounded-full">PHP</span>
                            <span class="px-3 py-1 bg-blue-100 text-blue-600 text-sm rounded-full">MySQL</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 5 -->
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="500">
                    <div class="h-48 bg-gradient-to-br from-red-500 to-pink-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Mobile Banking App</h3>
                        <p class="text-gray-600 mb-4">Secure banking solution with advanced authentication</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-red-100 text-red-600 text-sm rounded-full">Laravel</span>
                            <span class="px-3 py-1 bg-green-100 text-green-600 text-sm rounded-full">Vue.js</span>
                        </div>
                    </div>
                </div>
                
                <!-- Project 6 -->
                <div class="project-card bg-white rounded-2xl shadow-lg overflow-hidden" data-aos="fade-up" data-aos-delay="600">
                    <div class="h-48 bg-gradient-to-br from-indigo-500 to-blue-600"></div>
                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">Learning Management System</h3>
                        <p class="text-gray-600 mb-4">Educational platform with video streaming and assessments</p>
                        <div class="flex space-x-2">
                            <span class="px-3 py-1 bg-indigo-100 text-indigo-600 text-sm rounded-full">React</span>
                            <span class="px-3 py-1 bg-gray-100 text-gray-600 text-sm rounded-full">Express</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Experience Section -->
    <section id="experience" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-6xl font-bold text-center text-gray-900 mb-16" data-aos="fade-up">Work Experience</h2>
            
            <div class="space-y-12">
                <!-- Experience 1 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="100">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                        <div class="bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Senior Software Engineer</h3>
                            <p class="text-blue-600 font-semibold mb-2">Tech Hertz</p>
                            <p class="text-gray-500 mb-4">August 2023 - Present | Karachi, Pakistan</p>
                            <p class="text-gray-600">Architected scalable microservices using Express.js and TypeScript, improving system performance by 40% and supporting 1M+ daily active users. Led full-stack development with Next.js and optimized PostgreSQL performance.</p>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="w-80 h-60 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mx-auto"></div>
                    </div>
                </div>
                
                <!-- Experience 2 -->
                <div class="flex flex-col md:flex-row-reverse items-center" data-aos="fade-up" data-aos-delay="200">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pl-8">
                        <div class="bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Software Engineer</h3>
                            <p class="text-green-600 font-semibold mb-2">IT Cords Solutions</p>
                            <p class="text-gray-500 mb-4">July 2020 - July 2023 | Karachi, Pakistan</p>
                            <p class="text-gray-600">Developed robust backend solutions using PHP, Node.js, and Express.js. Collaborated on frontend development with Vue.js and Nuxt.js, leading to 20% increase in user engagement for 500K+ monthly active users.</p>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pr-8">
                        <div class="w-80 h-60 bg-gradient-to-br from-green-500 to-teal-600 rounded-2xl mx-auto"></div>
                    </div>
                </div>
                
                <!-- Experience 3 -->
                <div class="flex flex-col md:flex-row items-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pr-8">
                        <div class="bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Backend Developer</h3>
                            <p class="text-purple-600 font-semibold mb-2">Web Fuses</p>
                            <p class="text-gray-500 mb-4">June 2018 - September 2020 | Karachi, Pakistan</p>
                            <p class="text-gray-600">Managed comprehensive backend development using Node.js, PHP, and database technologies. Collaborated with cross-functional teams and orchestrated RESTful API integrations for e-commerce platforms.</p>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pl-8">
                        <div class="w-80 h-60 bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl mx-auto"></div>
                    </div>
                </div>
                
                <!-- Experience 4 -->
                <div class="flex flex-col md:flex-row-reverse items-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="md:w-1/2 mb-8 md:mb-0 md:pl-8">
                        <div class="bg-white p-8 rounded-2xl shadow-lg">
                            <h3 class="text-2xl font-bold text-gray-900 mb-2">Web Developer</h3>
                            <p class="text-red-600 font-semibold mb-2">Hashes n Tags</p>
                            <p class="text-gray-500 mb-4">February 2016 - May 2018 | Karachi, Pakistan</p>
                            <p class="text-gray-600">Developed custom APIs using PHP and created responsive user interfaces using HTML5, CSS3, JavaScript, and Vue.js. Designed efficient database solutions with MySQL for secure data management.</p>
                        </div>
                    </div>
                    <div class="md:w-1/2 md:pr-8">
                        <div class="w-80 h-60 bg-gradient-to-br from-red-500 to-orange-600 rounded-2xl mx-auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. Education Section -->
    <section id="education" class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <h2 class="text-6xl font-bold text-center text-gray-900 mb-16" data-aos="fade-up">Education</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Education 1 -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mb-6">
                        <span class="text-white text-2xl font-bold">BS</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Bachelor of Computer Science</h3>
                    <p class="text-blue-600 font-semibold mb-2">Newports Institute of Communications and Economics</p>
                    <p class="text-gray-500 mb-4">2019 - 2023</p>
                    <p class="text-gray-600">Specialized in Software Engineering and modern programming languages. Focus on web development and database systems.</p>
                </div>
                
                <!-- Education 2 -->
                <div class="bg-gradient-to-br from-green-50 to-emerald-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mb-6">
                        <span class="text-white text-xl font-bold">ACCP</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">ACCP-Pro Diploma</h3>
                    <p class="text-green-600 font-semibold mb-2">Aptech Computer Education, Karachi</p>
                    <p class="text-gray-500 mb-4">2016 - 2020</p>
                    <p class="text-gray-600">Comprehensive programming diploma covering multiple technologies including web development, databases, and software engineering principles.</p>
                </div>
                
                <!-- Education 3 -->
                <div class="bg-gradient-to-br from-purple-50 to-violet-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mb-6">
                        <span class="text-white text-xl font-bold">HSC</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Higher Secondary Certificate</h3>
                    <p class="text-purple-600 font-semibold mb-2">Jinnah Govt College Nazimabad, Karachi</p>
                    <p class="text-gray-500 mb-4">2011 - 2013</p>
                    <p class="text-gray-600">Pre-Engineering with focus on Mathematics, Physics, and Chemistry. Built strong analytical and problem-solving foundation.</p>
                </div>
                
                <!-- Education 4 -->
                <div class="bg-gradient-to-br from-orange-50 to-red-50 p-8 rounded-2xl shadow-lg" data-aos="fade-up" data-aos-delay="400">
                    <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-6">
                        <span class="text-white text-xl font-bold">SSC</span>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Secondary School Certificate</h3>
                    <p class="text-orange-600 font-semibold mb-2">New Progressive Public School, Karachi</p>
                    <p class="text-gray-500 mb-4">2009 - 2011</p>
                    <p class="text-gray-600">Computer Science specialization with early exposure to programming concepts and logical thinking development.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. Certifications Section -->
    <section id="certifications" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
            <h2 class="text-6xl font-bold text-center text-gray-900 mb-16" data-aos="fade-up">Certifications</h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Certification 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-blue-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 text-2xl font-bold">AWS</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">AWS Certified Solutions Architect</h3>
                            <p class="text-blue-600 font-semibold">Amazon Web Services</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: March 2023</p>
                    <p class="text-gray-600">Professional level certification demonstrating expertise in designing distributed applications on AWS.</p>
                </div>
                
                <!-- Certification 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-green-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-green-600 text-2xl font-bold">GCP</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Google Cloud Professional Developer</h3>
                            <p class="text-green-600 font-semibold">Google Cloud</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: August 2022</p>
                    <p class="text-gray-600">Certified in developing scalable and highly available applications on Google Cloud Platform.</p>
                </div>
                
                <!-- Certification 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-purple-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-purple-600 text-xl font-bold">Meta</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Meta Front-End Developer</h3>
                            <p class="text-purple-600 font-semibold">Meta (Facebook)</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: January 2023</p>
                    <p class="text-gray-600">Professional certificate in React, JavaScript, and modern front-end development practices.</p>
                </div>
                
                <!-- Certification 4 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-red-600 text-xl font-bold">OCI</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Oracle Cloud Infrastructure Developer</h3>
                            <p class="text-red-600 font-semibold">Oracle</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: November 2022</p>
                    <p class="text-gray-600">Advanced certification in Oracle Cloud Infrastructure development and deployment strategies.</p>
                </div>
            </div>
        </div>
    </section>

    <div class="grid md:grid-cols-2 gap-8">
                <!-- Certification 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-blue-500" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-blue-600 text-2xl font-bold">PHP</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">PHP and CodeIgniter Framework</h3>
                            <p class="text-blue-600 font-semibold">Hazza Institute of Technology</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: September 2023</p>
                    <p class="text-gray-500 mb-2">Credential ID: 23001020625</p>
                    <p class="text-gray-600">Professional certification in PHP programming and CodeIgniter MVC framework development with hands-on project experience.</p>
                </div>
                
                <!-- Placeholder Certification 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-green-500" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-green-600 text-xl font-bold">Node</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">Node.js Developer Certification</h3>
                            <p class="text-green-600 font-semibold">Tech Academy</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: In Progress</p>
                    <p class="text-gray-600">Advanced Node.js development with Express.js, database integration, and API development best practices.</p>
                </div>
                
                <!-- Placeholder Certification 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-purple-500" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-purple-600 text-xl font-bold">React</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">React.js Professional Developer</h3>
                            <p class="text-purple-600 font-semibold">Frontend Masters</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: In Progress</p>
                    <p class="text-gray-600">Advanced React.js concepts including hooks, context, state management, and modern development patterns.</p>
                </div>
                
                <!-- Placeholder Certification 4 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg border-l-4 border-red-500" data-aos="fade-up" data-aos-delay="400">
                    <div class="flex items-center mb-6">
                        <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mr-4">
                            <span class="text-red-600 text-xl font-bold">AWS</span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900">AWS Cloud Practitioner</h3>
                            <p class="text-red-600 font-semibold">Amazon Web Services</p>
                        </div>
                    </div>
                    <p class="text-gray-500 mb-2">Issued: Pursuing</p>
                    <p class="text-gray-600">Foundational understanding of AWS cloud services, architecture, and deployment strategies for scalable applications.</p>
                </div>
            </div>

    <!-- 8. Contact Section -->
    <section id="contact" class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-purple-900 text-white">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto text-center mb-12" data-aos="fade-up">
                <h2 class="text-5xl font-bold mb-6">LET'S CONNECT</h2>
                <p class="text-xl text-gray-300">Have a project in mind? Let's discuss how we can bring your ideas to life.</p>
            </div>
            
            <div class="max-w-2xl mx-auto">
                <form action="https://formspree.io/f/YOUR_FORM_ID" method="POST" class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                    <!-- Your Name -->
                    <div>
                        <label for="name" class="block text-sm font-semibold text-gray-300 mb-2">Your Name</label>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               required
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent backdrop-blur-sm"
                               placeholder="Enter your full name">
                    </div>
                    
                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-300 mb-2">Email</label>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               required
                               class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent backdrop-blur-sm"
                               placeholder="your.email@example.com">
                    </div>
                    
                    <!-- Message -->
                    <div>
                        <label for="message" class="block text-sm font-semibold text-gray-300 mb-2">Message</label>
                        <textarea id="message" 
                                  name="message" 
                                  rows="6" 
                                  required
                                  class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent backdrop-blur-sm resize-none"
                                  placeholder="Tell me about your project or just say hello..."></textarea>
                    </div>
                    
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" 
                                class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-12 py-4 rounded-full font-bold text-lg hover:from-blue-700 hover:to-purple-700 transform hover:-translate-y-1 transition-all duration-300 shadow-xl hover:shadow-2xl">
                            Send Message
                        </button>
                    </div>
                </form>
                
                <!-- Contact Info -->
                <div class="mt-16 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="grid md:grid-cols-2 gap-10">
                        <div>
                            <div class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-white text-xl">📧</span>
                            </div>
                            <p class="text-gray-300">anasbinikhlas195@gmail.com</p>
                        </div>
                        <!-- <div>
                            <div class="w-12 h-12 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-white text-xl">📱</span>
                            </div>
                            <p class="text-gray-300">+92 XXX XXXXXXX</p>
                        </div> -->
                        <div>
                            <div class="w-12 h-12 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span class="text-white text-xl">📍</span>
                            </div>
                            <p class="text-gray-300">Karachi, Pakistan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black text-white py-8">
        <div class="container mx-auto px-6 text-center">
            <p>&copy; 2024 Anas Bin Ikhlas. All rights reserved.</p>
            <div class="flex justify-center space-x-6 mt-4">
                <a href="https://www.linkedin.com/in/anas-bin-ikhlas-8b9279146" class="text-gray-400 hover:text-white transition-colors">LinkedIn</a>
                <a href="https://github.com/anasbinikhlas" class="text-gray-400 hover:text-white transition-colors">GitHub</a>
                <a href="https://x.com/Anasbinikhlas" class="text-gray-400 hover:text-white transition-colors">X</a>
            </div>
        </div>
    </footer>

    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>