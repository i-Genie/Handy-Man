<?php

namespace Database\Seeders;

use App\Models\Attribute;
use App\Models\Category;
use App\Models\Option;
use App\Models\SubCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryRefreshedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Cleaning Services' => [
                'subcategories' => [
                    'General Cleaning' => [
                        'attributes' => [
                            'service type' => [
                                'options' => [
                                    'Home Cleaning',
                                    'Office Cleaning',
                                ],
                                'is_multiselect' => true,
                            ],
                            'specific tasks' => [
                                'options' => [
                                    'Bathroom Cleaning',
                                    'Kitchen Cleaning',
                                    'Carpet Cleaning',
                                    'Window Cleaning',
                                    'Dusting',
                                    'Floor Cleaning (Mopping, Sweeping)',
                                    'Wall Cleaning',
                                    'Furniture Cleaning',
                                    'Appliance Cleaning',
                                    'Laundry Services',
                                    'Post-Event Cleaning',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Specialized Cleaning' => [
                        'subcategories' => [
                            'Post-Construction Cleaning' => [
                                'attributes' => [
                                    'service options' => [
                                        'options' => [
                                            'Debris Removal',
                                            'Surface Cleaning',
                                            'Dust Removal',
                                            'Floor Polishing',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                            'Fumigation Cleaning' => [
                                'attributes' => [
                                    'service options' => [
                                        'options' => [
                                            'Pest Control Treatment',
                                            'Odor Removal',
                                            'Disinfection',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                            'Upholstery Cleaning' => [
                                'attributes' => [
                                    'service options' => [
                                        'options' => [
                                            'Stain Removal',
                                            'Steam Cleaning',
                                            'Fabric Protection',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                            'Pressure Washing' => [
                                'attributes' => [
                                    'service options' => [
                                        'options' => [
                                            'Driveway Cleaning',
                                            'Deck Cleaning',
                                            'Siding Cleaning',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                            'Dry Cleaning Services' => [
                                'attributes' => [
                                    'specific services' => [
                                        'options' => [
                                            'Clothing Dry Cleaning',
                                            'Laundry Service',
                                            'Alterations & Repairs',
                                            'Specialty Item Cleaning',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                    'item type' => [
                                        'options' => [
                                            'Formal Wear',
                                            'Casual Wear',
                                            'Bedding',
                                            'Curtains',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'cleaning frequency' => [
                        'options' => [
                            'One-time',
                            'Weekly',
                            'Bi-weekly',
                            'Monthly',
                            'Seasonal',
                        ],
                        'is_multiselect' => false,
                    ],
                    'cleaning supplies' => [
                        'options' => [
                            'Provided by Client',
                            'Provided by Cleaner',
                        ],
                        'is_multiselect' => false,
                    ],
                    'experience level' => [
                        'options' => [
                            'Less than 1 year',
                            '1-3 years',
                            '3-5 years',
                            'More than 5 years',
                        ],
                        'is_multiselect' => false,
                    ],
                    'same day services' => [
                        'options' => [
                            'Available',
                            'Not Available',
                        ],
                        'is_multiselect' => false,
                    ],
                ],
            ],

            'Electrical Services' => [
                'subcategories' => [
                    'Residential & Commercial Electrical' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Residential Electrical', 'Commercial Electrical'],
                                'is_multiselect' => true,
                            ],
                            'certifications' => [
                                'options' => ['Licensed Electrician', 'Certified Technician'],
                                'is_multiselect' => true,
                            ],
                            'voltage expertise' => [
                                'options' => ['Low Voltage', 'Medium Voltage', 'High Voltage'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Solar Panel & Renewable Energy' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Solar Panel Installation', 'Battery Backup Systems', 'Solar Panel Maintenance'],
                                'is_multiselect' => true,
                            ],
                            'panel brands' => [
                                'options' => ['SunPower', 'Tesla', 'LG Solar', 'Canadian Solar'],
                                'is_multiselect' => true,
                            ],
                            'installation type' => [
                                'options' => ['Rooftop', 'Ground Mount', 'Hybrid'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Electrical Repairs' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Circuit Repair', 'Wiring Repair', 'Switch Replacement'],
                                'is_multiselect' => true,
                            ],
                            'repair types' => [
                                'options' => ['Emergency Repair', 'Scheduled Maintenance'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'same day service' => [
                        'options' => ['Available', 'Not Available'],
                        'is_multiselect' => false,
                    ],
                    'cost estimate' => [
                        'options' => ['Free Estimate', 'Paid Estimate'],
                        'is_multiselect' => false,
                    ],
                    'work experience' => [
                        'options' => ['Less than 1 year', '1-3 years', '3-5 years', '5+ years'],
                        'is_multiselect' => false,
                    ],
                ],
            ],

            'IT & Computer Services' => [
                'subcategories' => [
                    'Software Development' => [
                        'attributes' => [
                            'development services' => [
                                'options' => ['Web Development', 'App Development', 'Desktop Application'],
                                'is_multiselect' => true,
                            ],
                            'languages & frameworks' => [
                                'options' => [
                                    'Java',
                                    'Python',
                                    'C#',
                                    'PHP',
                                    'Ruby',
                                    'JavaScript',
                                    'Node.js',
                                    'React.js',
                                    'Vue.js',
                                    'Laravel',
                                    'Django',
                                    'Go',
                                    'Swift',
                                    'Kotlin',
                                    'TypeScript',
                                    'Rust',
                                    'Scala',
                                    'Perl',
                                ],
                                'is_multiselect' => true,
                            ],  
                        ],
                    ],
                    'UI/UX Design' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'User Interface Design',
                                    'User Experience Research',
                                    'Usability Testing',
                                    'Wireframing and Prototyping',
                                ],
                                'is_multiselect' => true,
                            ],
                            'design tools' => [
                                'options' => [
                                    'Adobe XD',
                                    'Figma',
                                    'Sketch',
                                    'InVision',
                                    'Axure',
                                    'Photoshop',
                                ],
                                'is_multiselect' => true,
                            ],
                            'industry focus' => [
                                'options' => [
                                    'E-commerce',
                                    'Healthcare',
                                    'Education',
                                    'Finance',
                                    'Travel',
                                    'Real Estate',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Digital Marketing' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'SEO',
                                    'Social Media Marketing',
                                    'Email Marketing',
                                    'Content Marketing',
                                    'Influencer Marketing',
                                    'Affiliate Marketing',
                                ],
                                'is_multiselect' => true,
                            ],
                            'marketing tools' => [
                                'options' => [
                                    'Google Analytics',
                                    'Mailchimp',
                                    'Hootsuite',
                                    'Buffer',
                                    'Canva',
                                    'SEMrush',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Cybersecurity' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Penetration Testing', 'Vulnerability Assessment', 'Incident Response'],
                                'is_multiselect' => true,
                            ],
                            'security certifications' => [
                                'options' => ['CISSP', 'CEH', 'OSCP', 'CISM', 'CompTIA Security+'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Blockchain & Cryptocurrency' => [
                        'attributes' => [
                            'blockchain service type' => [
                                'options' => ['Smart Contract Development', 'Blockchain Integration', 'Crypto Wallet Development'],
                                'is_multiselect' => true,
                            ],
                            'blockchain technologies' => [
                                'options' => ['Ethereum', 'Hyperledger', 'Binance Smart Chain', 'Cardano', 'Solana'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'QA & Testing' => [
                        'attributes' => [
                            'testing type' => [
                                'options' => ['Manual Testing', 'Automated Testing', 'Load Testing', 'API Testing'],
                                'is_multiselect' => true,
                            ],
                            'tools' => [
                                'options' => ['Selenium', 'Postman', 'JMeter', 'Cypress', 'TestNG', 'QUnit'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'AI & Data Science' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Machine Learning', 'Data Analytics', 'Natural Language Processing', 'AI Model Development'],
                                'is_multiselect' => true,
                            ],
                            'languages & tools' => [
                                'options' => ['Python', 'R', 'TensorFlow', 'PyTorch', 'Scikit-learn', 'Pandas', 'NumPy'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'experience level' => [
                        'options' => ['Entry-level', 'Mid-level', 'Senior-level'],
                        'is_multiselect' => false,
                    ],
                ],
            ],

            'Plumbing Services' => [
                'subcategories' => [
                    'Residential Plumbing' => [
                        'attributes' => [
                            'service type' => [
                                'options' => [
                                    'Drain Cleaning',
                                    'Water Heater Installation',
                                    'Leak Detection',
                                    'Pipe Replacement',
                                    'Faucet Installation',
                                ],
                                'is_multiselect' => true,
                            ],
                            'pipe material' => [
                                'options' => ['Copper', 'PVC', 'PEX', 'Galvanized Steel', 'CPVC'],
                                'is_multiselect' => true,
                            ],
                            'water pressure issues' => [
                                'options' => ['Low Pressure', 'High Pressure', 'Regular Pressure'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                    'Commercial Plumbing' => [
                        'attributes' => [
                            'service type' => [
                                'options' => [
                                    'Sewer Line Repair',
                                    'Commercial Water Heaters',
                                    'Hydraulic Plumbing',
                                    'Backflow Prevention',
                                    'Grease Trap Installation',
                                ],
                                'is_multiselect' => true,
                            ],
                            'industry experience' => [
                                'options' => ['Restaurants', 'Hotels', 'Hospitals', 'Office Buildings', 'Retail Stores'],
                                'is_multiselect' => true,
                            ],
                            'emergency services' => [
                                'options' => ['24/7 Availability', 'Same-Day Service'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'experience level' => [
                        'options' => ['Entry-level', 'Mid-level', 'Senior-level'],
                        'is_multiselect' => false,
                    ],
                ],
            ],

            'Mechanical Services' => [
                'subcategories' => [
                    'HVAC Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => [
                                    'AC Installation',
                                    'AC Repair',
                                    'Heating System Installation',
                                    'Duct Cleaning',
                                    'Thermostat Installation',
                                ],
                                'is_multiselect' => true,
                            ],
                            'certifications' => [
                                'options' => [
                                    'Licensed HVAC Technician',
                                    'EPA Certified',
                                    'NATE Certified',
                                    'HVAC Excellence Certified',
                                ],
                                'is_multiselect' => true,
                            ],
                            'system types' => [
                                'options' => ['Central AC', 'Ductless Mini-Split', 'Heat Pumps', 'Furnaces'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Appliance Repair' => [
                        'attributes' => [
                            'appliance type' => [
                                'options' => [
                                    'Refrigerator',
                                    'Washing Machine',
                                    'Dryer',
                                    'Dishwasher',
                                    'Microwave',
                                    'Oven',
                                ],
                                'is_multiselect' => true,
                            ],
                            'brand expertise' => [
                                'options' => [
                                    'Samsung',
                                    'LG',
                                    'Whirlpool',
                                    'Bosch',
                                    'GE',
                                    'Frigidaire',
                                ],
                                'is_multiselect' => true,
                            ],
                            'repair types' => [
                                'options' => ['Electrical Issues', 'Mechanical Failures', 'Leaking Issues'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Auto Mechanic' => [
                        'attributes' => [
                            'service type' => [
                                'options' => [
                                    'Oil Change',
                                    'Brake Repair',
                                    'Transmission Repair',
                                    'Tire Rotation',
                                    'Battery Replacement',
                                ],
                                'is_multiselect' => true,
                            ],
                            'vehicle types' => [
                                'options' => [
                                    'Sedan',
                                    'SUV',
                                    'Truck',
                                    'Electric Vehicles',
                                    'Motorcycles',
                                ],
                                'is_multiselect' => true,
                            ],
                            'diagnostic services' => [
                                'options' => ['Computer Diagnostics', 'Engine Diagnostics', 'Exhaust System Diagnostics'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'experience level' => [
                        'options' => ['Entry-level', 'Mid-level', 'Senior-level'],
                        'is_multiselect' => false,
                    ],
                ],
            ],

            'Handyman Services' => [
                'subcategories' => [
                    'General Repairs' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Furniture Assembly', 'Door Repair', 'Picture Hanging'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Home Renovation' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Kitchen Remodeling', 'Bathroom Remodeling', 'Basement Finishing'],
                                'is_multiselect' => true,
                            ],
                            'material expertise' => [
                                'options' => ['Wood', 'Tile', 'Drywall', 'Concrete'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Exterior Repairs' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Fence Repair', 'Deck Installation', 'Gutter Repair'],
                                'is_multiselect' => true,
                            ],
                            'material expertise' => [
                                'options' => ['Wood', 'Metal', 'Vinyl'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Electrical Handyman Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Light Fixture Installation', 'Outlet Repair', 'Ceiling Fan Installation'],
                                'is_multiselect' => true,
                            ],
                            'certifications' => [
                                'options' => ['Licensed Electrician', 'Certified Technician'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Plumbing Handyman Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Leaky Faucet Repair', 'Toilet Installation', 'Drain Unclogging'],
                                'is_multiselect' => true,
                            ],
                            'certifications' => [
                                'options' => ['Certified Plumber', 'Licensed Handyman'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'same-day services' => [
                        'options' => ['Yes', 'No'],
                        'is_multiselect' => false,
                    ],
                    'experience level' => [
                        'options' => ['Less than 1 year', '1-2 years', '3-5 years', '5+ years'],
                        'is_multiselect' => false,
                    ],
                ],
            ],

            'Health & Wellness Services' => [
                'subcategories' => [
                    'Fitness Training' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Personal Training', 'Yoga Instruction', 'Group Fitness', 'Pilates'],
                                'is_multiselect' => true,
                            ],
                            'training style' => [
                                'options' => ['In-person', 'Virtual', 'Hybrid'],
                                'is_multiselect' => true,
                            ],
                            'specialization' => [
                                'options' => ['Weight Loss', 'Strength Training', 'Endurance', 'Flexibility'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Nutrition & Diet Consulting' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Meal Planning', 'Weight Management', 'Sports Nutrition', 'Vegan & Vegetarian Diets'],
                                'is_multiselect' => true,
                            ],
                            'consultation type' => [
                                'options' => ['One-on-One', 'Group Consulting', 'Virtual Consulting'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Mental Health Counseling' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Therapist', 'Life Coach', 'Grief Counseling', 'Stress Management'],
                                'is_multiselect' => true,
                            ],
                            'consultation type' => [
                                'options' => ['In-person', 'Teletherapy', 'Group Therapy'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Massage Therapy' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Swedish Massage', 'Deep Tissue Massage', 'Sports Massage', 'Prenatal Massage'],
                                'is_multiselect' => true,
                            ],
                            'location' => [
                                'options' => ['At Client’s Location', 'At Studio'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'same-day services' => [
                        'options' => ['Yes', 'No'],
                        'is_multiselect' => false,
                    ],
                    'work experience' => [
                        'options' => ['Less than 1 year', '1-2 years', '3-5 years', '5+ years'],
                        'is_multiselect' => false,
                    ],
                    'certifications' => [
                        'options' => ['Certified Personal Trainer', 'Registered Dietitian', 'Licensed Therapist', 'Certified Massage Therapist'],
                        'is_multiselect' => true,
                    ],
                ],
            ],

            'Education & Tutoring' => [
                'subcategories' => [
                    'Subject Tutoring' => [
                        'attributes' => [
                            'subjects' => [
                                'options' => ['Math', 'Science', 'English', 'History', 'Geography', 'Languages', 'Computer Science'],
                                'is_multiselect' => true,
                            ],
                            'grade level' => [
                                'options' => ['Elementary', 'Middle School', 'High School', 'College'],
                                'is_multiselect' => true,
                            ],
                            'tutoring format' => [
                                'options' => ['In-person', 'Online', 'Hybrid'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Test Preparation' => [
                        'attributes' => [
                            'tests' => [
                                'options' => ['SAT', 'GRE', 'GMAT', 'ACT', 'TOEFL', 'IELTS'],
                                'is_multiselect' => true,
                            ],
                            'test preparation format' => [
                                'options' => ['One-on-One', 'Group Sessions', 'Online'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Online Learning' => [
                        'attributes' => [
                            'platforms' => [
                                'options' => ['Zoom', 'Google Meet', 'Skype', 'Microsoft Teams'],
                                'is_multiselect' => true,
                            ],
                            'course types' => [
                                'options' => ['Recorded Lessons', 'Live Lessons'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Academic Counseling' => [
                        'attributes' => [
                            'counseling focus' => [
                                'options' => ['College Applications', 'Career Counseling', 'Study Skills'],
                                'is_multiselect' => true,
                            ],
                            'counseling format' => [
                                'options' => ['In-person', 'Online'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'same-day services' => [
                        'options' => ['Yes', 'No'],
                        'is_multiselect' => false,
                    ],
                    'work experience' => [
                        'options' => ['Less than 1 year', '1-2 years', '3-5 years', '5+ years'],
                        'is_multiselect' => false,
                    ],
                    'certifications' => [
                        'options' => ['Teaching Credential', 'Tutoring Certification', 'Test Prep Certification'],
                        'is_multiselect' => true,
                    ],
                ],
            ],

            'Beauty & Personal Care' => [
                'subcategories' => [
                    'Hair Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Haircuts', 'Styling', 'Coloring', 'Hair Extensions', 'Perms'],
                                'is_multiselect' => true,
                            ],
                            'hair length expertise' => [
                                'options' => ['Short Hair', 'Medium Hair', 'Long Hair'],
                                'is_multiselect' => true,
                            ],
                            'gender expertise' => [
                                'options' => ['Male', 'Female', 'Unisex'],
                                'is_multiselect' => true,
                            ],
                            'chemical treatments' => [
                                'options' => ['Keratin', 'Relaxing', 'Hair Botox'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Nail Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Manicures', 'Pedicures', 'Nail Art', 'Nail Extensions'],
                                'is_multiselect' => true,
                            ],
                            'nail treatments' => [
                                'options' => ['Gel', 'Acrylic', 'Dip Powder', 'Shellac'],
                                'is_multiselect' => true,
                            ],
                            'gender expertise' => [
                                'options' => ['Male', 'Female', 'Unisex'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Skincare' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Facials', 'Waxing', 'Dermatology', 'Microdermabrasion', 'Chemical Peels'],
                                'is_multiselect' => true,
                            ],
                            'skin concerns' => [
                                'options' => ['Acne', 'Anti-aging', 'Hydration', 'Pigmentation', 'Sensitive Skin'],
                                'is_multiselect' => true,
                            ],
                            'product type' => [
                                'options' => ['Organic', 'Medical Grade', 'Cruelty-Free'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Makeup Artists' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Bridal Makeup', 'Event Makeup', 'Theatrical Makeup', 'Editorial Makeup'],
                                'is_multiselect' => true,
                            ],
                            'makeup products' => [
                                'options' => ['Traditional Makeup', 'Airbrush Makeup', 'Mineral Makeup'],
                                'is_multiselect' => true,
                            ],
                            'application format' => [
                                'options' => ['In-studio', 'On-location'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Massage Therapy' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Swedish Massage', 'Deep Tissue Massage', 'Hot Stone Massage', 'Prenatal Massage'],
                                'is_multiselect' => true,
                            ],
                            'massage duration' => [
                                'options' => ['30 minutes', '60 minutes', '90 minutes'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Spa Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Body Scrub', 'Mud Wrap', 'Aromatherapy', 'Sauna'],
                                'is_multiselect' => true,
                            ],
                            'facility features' => [
                                'options' => ['Steam Room', 'Private Rooms', 'Jacuzzi', 'Couples Treatment Room'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'same-day services' => [
                        'options' => ['Yes', 'No'],
                        'is_multiselect' => false,
                    ],
                    'work experience' => [
                        'options' => ['Less than 1 year', '1-2 years', '3-5 years', '5+ years'],
                        'is_multiselect' => false,
                    ],
                    'certifications' => [
                        'options' => ['Licensed Esthetician', 'Certified Nail Technician', 'Certified Hair Stylist'],
                        'is_multiselect' => true,
                    ],
                ],
            ],

            'Event & Entertainment Services' => [
                'subcategories' => [
                    'Event Planning' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Wedding Planning', 'Corporate Events', 'Birthday Parties', 'Themed Events', 'Private Parties', 'Conferences'],
                                'is_multiselect' => true,
                            ],
                            'event size' => [
                                'options' => ['Small (1-50 guests)', 'Medium (51-100 guests)', 'Large (100+ guests)', 'Extra Large (500+ guests)'],
                                'is_multiselect' => false,
                            ],
                            'planning services' => [
                                'options' => ['Venue Booking', 'Catering', 'Decoration', 'Logistics', 'Entertainment Booking', 'Security'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'DJ & Music Services' => [
                        'attributes' => [
                            'music genres' => [
                                'options' => ['Pop', 'Rock', 'Hip-hop', 'Classical', 'Jazz', 'EDM', 'Afrobeats'],
                                'is_multiselect' => true,
                            ],
                            'equipment provided' => [
                                'options' => ['Sound System', 'Lighting', 'Stage Setup', 'Smoke Machine', 'Microphones'],
                                'is_multiselect' => true,
                            ],
                            'service type' => [
                                'options' => ['DJ for Weddings', 'Hype Man', 'Corporate Events', 'Private Parties', 'Concerts'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Party Rentals' => [
                        'attributes' => [
                            'rental items' => [
                                'options' => ['Bouncy Castles', 'Tents', 'Chairs', 'Tables', 'Catering Equipment', 'Dance Floors', 'Stage'],
                                'is_multiselect' => true,
                            ],
                            'event type' => [
                                'options' => ['Birthday Party', 'Wedding', 'Corporate Event', 'Festival', 'Outdoor Concert'],
                                'is_multiselect' => true,
                            ],
                            'rental duration' => [
                                'options' => ['Half-Day', 'Full-Day', 'Weekend', 'Custom'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                    'Photography & Videography' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Wedding Photography', 'Corporate Event Photography', 'Birthday Party Photography', 'Videography Services', 'Drone Coverage'],
                                'is_multiselect' => true,
                            ],
                            'event type' => [
                                'options' => ['Weddings', 'Corporate Events', 'Birthdays', 'Private Parties', 'Festivals'],
                                'is_multiselect' => true,
                            ],
                            'deliverables' => [
                                'options' => ['Digital Copies', 'Printed Albums', 'Video Editing', 'Highlight Reels'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Catering Services' => [
                        'attributes' => [
                            'cuisine type' => [
                                'options' => ['Local Cuisine', 'Continental', 'Asian', 'BBQ', 'Vegetarian', 'Vegan', 'Custom Menu'],
                                'is_multiselect' => true,
                            ],
                            'service type' => [
                                'options' => ['Buffet Service', 'Plated Service', 'Food Stations', 'Cocktail Service', 'Barbecue'],
                                'is_multiselect' => true,
                            ],
                            'dietary preferences' => [
                                'options' => ['Gluten-Free', 'Halal', 'Kosher', 'Allergy-Free Options'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Entertainment Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Live Band', 'Magician', 'Comedian', 'Dance Performance', 'Fireworks'],
                                'is_multiselect' => true,
                            ],
                            'event type' => [
                                'options' => ['Weddings', 'Corporate Events', 'Festivals', 'Private Parties', 'Concerts'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Security & Event Staffing' => [
                        'attributes' => [
                            'staffing type' => [
                                'options' => ['Security Guards', 'Event Coordinators', 'Ushers', 'Bartenders'],
                                'is_multiselect' => true,
                            ],
                            'service type' => [
                                'options' => ['Crowd Control', 'VIP Protection', 'Logistics Staff'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
                'attributes' => [
                    'work experience' => [
                        'options' => ['Less than 1 year', '1-2 years', '3-5 years', '5+ years'],
                        'is_multiselect' => false,
                    ],
                    'certifications' => [
                        'options' => ['Certified Event Planner', 'Licensed DJ', 'Certified Bartender'],
                        'is_multiselect' => true,
                    ],
                ],
            ],

            'Photography & Videography' => [
                'subcategories' => [
                    'Photography & Videography' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Photography', 'Videography'],
                                'is_multiselect' => true,
                            ],
                            'specific services' => [
                                'options' => [
                                    'Wedding Photography',
                                    'Event Photography',
                                    'Commercial Photography',
                                    'Wedding Videography',
                                    'Event Videography',
                                    'Promotional Videos',
                                    'Portrait Photography',
                                    'Corporate Headshots',
                                ],
                                'is_multiselect' => true,
                            ],
                            'styles' => [
                                'options' => ['Candid', 'Traditional', 'Documentary', 'Cinematic', 'Highlight Reel', 'Fashion', 'Editorial'],
                                'is_multiselect' => true,
                            ],
                            'deliverables' => [
                                'options' => ['Digital Files', 'Printed Albums', 'Framed Prints', 'Video Editing', 'Raw Footage'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Mobile Services' => [
                        'attributes' => [
                            'service type' => [
                                'options' => ['Mobile Photography', 'Mobile Videography'],
                                'is_multiselect' => true,
                            ],
                            'specific services' => [
                                'options' => [
                                    'Mobile Wedding Photography',
                                    'Mobile Event Photography',
                                    'Mobile Portraits',
                                    'Mobile Wedding Videography',
                                    'Mobile Event Videography',
                                    'Social Media Videos',
                                ],
                                'is_multiselect' => true,
                            ],
                            'styles' => [
                                'options' => ['Candid', 'Lifestyle', 'Street', 'Cinematic', 'Vlog Style', 'Highlight Reel'],
                                'is_multiselect' => true,
                            ],
                            'device type' => [
                                'options' => ['Smartphone', 'Tablet', 'GoPro', 'Drone'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Transport & Logistics' => [
                'subcategories' => [
                    'Moving & Relocation' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Home Moving',
                                    'Office Relocation',
                                    'International Moving',
                                    'Packing Services',
                                    'Furniture Disassembly/Reassembly',
                                    'Storage Solutions',
                                ],
                                'is_multiselect' => true,
                            ],
                            'vehicle type' => [
                                'options' => ['Truck', 'Van', 'Container', 'Specialty Vehicle (e.g., fragile goods)'],
                                'is_multiselect' => true,
                            ],
                            'distance type' => [
                                'options' => ['Local', 'Long-Distance', 'International'],
                                'is_multiselect' => true,
                            ],
                            'crew size' => [
                                'options' => ['Single Mover', 'Two Movers', 'Three+ Movers'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                    'Delivery Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Courier',
                                    'Package Delivery',
                                    'Same-Day Delivery',
                                    'Express Shipping',
                                    'Groceries Delivery',
                                    'Document Delivery',
                                ],
                                'is_multiselect' => true,
                            ],
                            'delivery type' => [
                                'options' => ['Standard', 'Express', 'Scheduled', 'Same-Day', 'Overnight'],
                                'is_multiselect' => true,
                            ],
                            'vehicle type' => [
                                'options' => ['Bike', 'Motorcycle', 'Car', 'Truck'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Vehicle Rental' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Car Rental',
                                    'Van Rental',
                                    'Bus Rental',
                                    'Luxury Vehicle Rental',
                                    'Motorcycle Rental',
                                    'Truck Rental',
                                ],
                                'is_multiselect' => true,
                            ],
                            'rental duration' => [
                                'options' => ['Hourly', 'Daily', 'Weekly', 'Monthly'],
                                'is_multiselect' => true,
                            ],
                            'additional options' => [
                                'options' => ['With Driver', 'Self-Drive', 'Chauffeur Service', 'Fuel Included'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Real Estate Services' => [
                'subcategories' => [
                    'Property Management' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Residential Management',
                                    'Commercial Management',
                                    'Tenant Screening',
                                    'Maintenance Coordination',
                                    'Rent Collection',
                                    'Lease Administration',
                                ],
                                'is_multiselect' => true,
                            ],
                            'property type' => [
                                'options' => ['Apartment', 'Single-Family Home', 'Commercial Building', 'Condominium', 'Multi-Family Unit'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Real Estate Agents' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Buying',
                                    'Selling',
                                    'Property Valuation',
                                    'Market Analysis',
                                    'Investment Consulting',
                                    'Property Showings',
                                    'Client Transportation',
                                ],
                                'is_multiselect' => true,
                            ],
                            'agent type' => [
                                'options' => ['Independent', 'Agency', 'Real Estate Team'],
                                'is_multiselect' => true,
                            ],
                            'specialization' => [
                                'options' => ['Residential', 'Commercial', 'Luxury', 'Foreclosures', 'First-Time Buyers'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Appraisal Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Residential Appraisal',
                                    'Commercial Appraisal',
                                    'Property Assessment',
                                    'Market Value Analysis',
                                    'Investment Property Appraisal',
                                ],
                                'is_multiselect' => true,
                            ],
                            'report type' => [
                                'options' => ['Full Report', 'Short Form', 'Desk Review'],
                                'is_multiselect' => true,
                            ],
                            'certification level' => [
                                'options' => ['Certified Residential Appraiser', 'Certified General Appraiser'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Vacation Rentals' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Short-Term Rentals',
                                    'Long-Term Rentals',
                                    'Property Listing',
                                    'Guest Management',
                                    'Cleaning Services',
                                    'Key Exchange Services',
                                ],
                                'is_multiselect' => true,
                            ],
                            'rental type' => [
                                'options' => ['Entire Property', 'Shared Space', 'Luxury Rentals'],
                                'is_multiselect' => true,
                            ],
                            'location type' => [
                                'options' => ['Urban', 'Rural', 'Near Attractions', 'Beachfront'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Legal & Financial Services' => [
                'subcategories' => [
                    'Legal Consulting' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Family Law',
                                    'Corporate Law',
                                    'Criminal Law',
                                    'Property Law',
                                    'Immigration Law',
                                    'Tax Law', // Added specialized service
                                    'Intellectual Property Law', // Added specialized service
                                ],
                                'is_multiselect' => true,
                            ],
                            'consultant type' => [
                                'options' => ['Individual Consultant', 'Law Firm'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Accounting Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Bookkeeping',
                                    'Tax Preparation',
                                    'Payroll Services',
                                    'Financial Reporting',
                                    'Forensic Accounting', // Added specialized service
                                    'Management Accounting', // Added specialized service
                                ],
                                'is_multiselect' => true,
                            ],
                            'accounting type' => [
                                'options' => ['Individual', 'Business'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Financial Planning' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Investment Advisory',
                                    'Wealth Management',
                                    'Retirement Planning',
                                    'Estate Planning',
                                    'Debt Management', // Added specialized service
                                    'Tax Planning', // Added specialized service
                                ],
                                'is_multiselect' => true,
                            ],
                            'planning type' => [
                                'options' => ['Individual', 'Family', 'Business'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Insurance Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Life Insurance',
                                    'Health Insurance',
                                    'Property Insurance',
                                    'Auto Insurance',
                                    'Disability Insurance', // Added specialized service
                                    'Travel Insurance', // Added specialized service
                                ],
                                'is_multiselect' => true,
                            ],
                            'insurance type' => [
                                'options' => ['Individual', 'Family', 'Business'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Art & Design' => [
                'subcategories' => [
                    'Graphic Design' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Logos',
                                    'Branding',
                                    'Web Design',
                                    'Social Media Graphics',
                                    'Print Design',
                                ],
                                'is_multiselect' => true,
                            ],
                            'design style' => [
                                'options' => ['Modern', 'Vintage', 'Minimalist', 'Bold'],
                                'is_multiselect' => true,
                            ],
                            'client type' => [
                                'options' => ['Small Business', 'Corporate', 'Non-Profit', 'Individual'],
                                'is_multiselect' => true,
                            ],
                            'delivery format' => [
                                'options' => ['Digital', 'Print', 'Both'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                    'Interior Design' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Residential Design',
                                    'Commercial Design',
                                    'Space Planning',
                                    'Color Consultation',
                                ],
                                'is_multiselect' => true,
                            ],
                            'style type' => [
                                'options' => ['Contemporary', 'Traditional', 'Eclectic', 'Industrial'],
                                'is_multiselect' => true,
                            ],
                            'project type' => [
                                'options' => ['Residential', 'Commercial', 'Renovation', 'New Build'],
                                'is_multiselect' => true,
                            ],
                            'color palette' => [
                                'options' => ['Neutral', 'Bold', 'Pastel', 'Monochromatic'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Fashion Design' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Clothing Design',
                                    'Accessories Design',
                                    'Costume Design',
                                    'Textile Design',
                                ],
                                'is_multiselect' => true,
                            ],
                            'fashion type' => [
                                'options' => ['Casual', 'Formal', 'Athletic', 'Evening Wear'],
                                'is_multiselect' => true,
                            ],
                            'fabric type' => [
                                'options' => ['Cotton', 'Silk', 'Wool', 'Synthetic'],
                                'is_multiselect' => true,
                            ],
                            'customization options' => [
                                'options' => ['Size', 'Color', 'Design Alterations'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Custom Art & Illustration' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Portraits',
                                    'Murals',
                                    'Digital Illustrations',
                                    'Fine Art',
                                ],
                                'is_multiselect' => true,
                            ],
                            'art style' => [
                                'options' => ['Realistic', 'Abstract', 'Cartoon', 'Surreal'],
                                'is_multiselect' => true,
                            ],
                            'medium' => [
                                'options' => ['Acrylic', 'Watercolor', 'Digital', 'Pencil'],
                                'is_multiselect' => true,
                            ],
                            'size' => [
                                'options' => ['Small', 'Medium', 'Large'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                ],
            ],

            'Pet Care Services' => [
                'subcategories' => [
                    'Dog Walking' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Regular Walks',
                                    'Puppy Walking',
                                    'Group Walks',
                                    'Private Walks',
                                    'Playtime Included',
                                ],
                                'is_multiselect' => true,
                            ],
                            'dog size' => [
                                'options' => [
                                    'Small',
                                    'Medium',
                                    'Large',
                                ],
                                'is_multiselect' => true,
                            ],
                            'walking duration' => [
                                'options' => ['30 minutes', '1 hour', '2 hours'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                    'Pet Grooming' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Bathing',
                                    'Haircut',
                                    'Nail Trimming',
                                    'Ear Cleaning',
                                    'De-shedding Treatment',
                                    'Flea and Tick Treatment',
                                ],
                                'is_multiselect' => true,
                            ],
                            'pet type' => [
                                'options' => [
                                    'Dog',
                                    'Cat',
                                    'Other',
                                ],
                                'is_multiselect' => true,
                            ],
                            'grooming style' => [
                                'options' => ['Breed-specific', 'Basic Trim', 'Creative Grooming'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Veterinary Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Routine Check-up',
                                    'Vaccinations',
                                    'Emergency Care',
                                    'Dental Care',
                                    'Surgery',
                                    'Microchipping',
                                ],
                                'is_multiselect' => true,
                            ],
                            'animal type' => [
                                'options' => [
                                    'Dog',
                                    'Cat',
                                    'Other',
                                ],
                                'is_multiselect' => true,
                            ],
                            'service type' => [
                                'options' => ['In-Clinic', 'Mobile Vet'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Pet Sitting' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'In-home Sitting',
                                    'Overnight Sitting',
                                    'Daily Visits',
                                    'Pet Feeding',
                                    'Playtime',
                                    'Medication Administration',
                                ],
                                'is_multiselect' => true,
                            ],
                            'pet type' => [
                                'options' => [
                                    'Dog',
                                    'Cat',
                                    'Other',
                                ],
                                'is_multiselect' => true,
                            ],
                            'sitting duration' => [
                                'options' => ['1 hour', '2 hours', 'Half Day', 'Full Day'],
                                'is_multiselect' => false,
                            ],
                        ],
                    ],
                ],
            ],

            'Marketing & Advertising' => [
                'subcategories' => [
                    'Digital Marketing' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'SEO',
                                    'Social Media Marketing',
                                    'Email Marketing',
                                    'Pay-Per-Click Advertising',
                                    'Content Marketing',
                                    'Affiliate Marketing',
                                ],
                                'is_multiselect' => true,
                            ],
                            'marketing tools' => [
                                'options' => [
                                    'Google Analytics',
                                    'Hootsuite',
                                    'Mailchimp',
                                    'AdWords',
                                    'SEMrush',
                                    'Buffer',
                                ],
                                'is_multiselect' => true,
                            ],
                            'campaign type' => [
                                'options' => ['Organic', 'Paid'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Content Creation' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Copywriting',
                                    'Blogging',
                                    'Social Media Posts',
                                    'Video Scripts',
                                    'Graphic Design',
                                    'E-books',
                                ],
                                'is_multiselect' => true,
                            ],
                            'content type' => [
                                'options' => [
                                    'Blog Posts',
                                    'Articles',
                                    'Web Content',
                                    'Infographics',
                                    'Videos',
                                ],
                                'is_multiselect' => true,
                            ],
                            'content format' => [
                                'options' => ['Text', 'Video', 'Audio', 'Visual'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Public Relations' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Media Relations',
                                    'Crisis Management',
                                    'Press Releases',
                                    'Event Coordination',
                                    'Brand Monitoring',
                                    'Influencer Partnerships',
                                ],
                                'is_multiselect' => true,
                            ],
                            'industry focus' => [
                                'options' => [
                                    'Corporate',
                                    'Nonprofit',
                                    'Entertainment',
                                    'Technology',
                                    'Healthcare',
                                ],
                                'is_multiselect' => true,
                            ],
                            'communication channels' => [
                                'options' => ['Online', 'Print', 'Broadcast'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Branding & Identity' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Logo Design',
                                    'Brand Strategy',
                                    'Visual Identity',
                                    'Brand Guidelines',
                                    'Naming',
                                ],
                                'is_multiselect' => true,
                            ],
                            'branding elements' => [
                                'options' => [
                                    'Taglines',
                                    'Color Palettes',
                                    'Typography',
                                    'Imagery',
                                    'Brand Voice',
                                ],
                                'is_multiselect' => true,
                            ],
                            'target audience' => [
                                'options' => ['B2B', 'B2C', 'Niche Markets'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Home Improvement & Renovation' => [
                'subcategories' => [
                    'Roofing & Gutter Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Roof Installation',
                                    'Roof Repair',
                                    'Gutter Cleaning',
                                    'Gutter Installation',
                                    'Roof Inspection',
                                    'Emergency Repairs',
                                ],
                                'is_multiselect' => true,
                            ],
                            'roof type' => [
                                'options' => [
                                    'Asphalt Shingles',
                                    'Metal',
                                    'Tile',
                                    'Flat',
                                    'Wood Shakes',
                                    'Slate',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Painting' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Interior Painting',
                                    'Exterior Painting',
                                    'Touch-ups',
                                    'Texture Application',
                                    'Wallpaper Removal',
                                    'Faux Finishing',
                                ],
                                'is_multiselect' => true,
                            ],
                            'paint type' => [
                                'options' => [
                                    'Oil-based',
                                    'Water-based',
                                    'Eco-friendly',
                                    'Chalk Paint',
                                ],
                                'is_multiselect' => true,
                            ],
                            'finish type' => [
                                'options' => ['Matte', 'Satin', 'Glossy'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Landscaping & Gardening' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Garden Design',
                                    'Lawn Maintenance',
                                    'Planting & Irrigation',
                                    'Hardscaping',
                                    'Tree Trimming',
                                    'Mulching',
                                ],
                                'is_multiselect' => true,
                            ],
                            'landscape type' => [
                                'options' => [
                                    'Residential',
                                    'Commercial',
                                    'Public Spaces',
                                ],
                                'is_multiselect' => true,
                            ],
                            'plant type' => [
                                'options' => ['Flowers', 'Shrubs', 'Trees', 'Succulents'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Carpentry Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Furniture Making',
                                    'Custom Cabinets',
                                    'Woodworking',
                                    'Repairs & Installations',
                                    'Deck Building',
                                    'Trim & Molding Installation',
                                ],
                                'is_multiselect' => true,
                            ],
                            'carpenter type' => [
                                'options' => [
                                    'Residential',
                                    'Commercial',
                                ],
                                'is_multiselect' => true,
                            ],
                            'wood type' => [
                                'options' => ['Pine', 'Oak', 'Maple', 'Cherry'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Flooring Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Tiling',
                                    'Hardwood Flooring',
                                    'Vinyl Installation',
                                    'Carpet Installation',
                                    'Floor Refinishing',
                                ],
                                'is_multiselect' => true,
                            ],
                            'floor type' => [
                                'options' => [
                                    'Laminate',
                                    'Cork',
                                    'Bamboo',
                                    'Tile',
                                    'Vinyl',
                                ],
                                'is_multiselect' => true,
                            ],
                            'installation type' => [
                                'options' => ['Glue Down', 'Nail Down', 'Floating'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Manufacturing & 3D Printing' => [
                'subcategories' => [
                    'Product Prototyping' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Concept Development',
                                    'Design Verification',
                                    'Material Selection',
                                    'Testing & Evaluation',
                                    'Rapid Prototyping',
                                    'User Testing',
                                ],
                                'is_multiselect' => true,
                            ],
                            'prototyping type' => [
                                'options' => [
                                    'Functional Prototypes',
                                    'Visual Prototypes',
                                    'Proof of Concept',
                                    'Mockups',
                                ],
                                'is_multiselect' => true,
                            ],
                            'industry focus' => [
                                'options' => ['Consumer Electronics', 'Automotive', 'Healthcare', 'Consumer Goods'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    '3D Printing' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'FDM Printing',
                                    'SLA Printing',
                                    'SLS Printing',
                                    'Resin Printing',
                                    'Metal 3D Printing',
                                ],
                                'is_multiselect' => true,
                            ],
                            'materials' => [
                                'options' => [
                                    'PLA',
                                    'ABS',
                                    'PETG',
                                    'Resin',
                                    'Nylon',
                                    'Metal Powder',
                                ],
                                'is_multiselect' => true,
                            ],
                            'resolution options' => [
                                'options' => ['High Resolution', 'Standard Resolution'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Custom Fabrication' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Metal Fabrication',
                                    'Plastic Fabrication',
                                    'Wood Fabrication',
                                    'Assembly Services',
                                    'CNC Machining',
                                ],
                                'is_multiselect' => true,
                            ],
                            'fabrication type' => [
                                'options' => [
                                    'Prototype',
                                    'Production',
                                    'Short Runs',
                                ],
                                'is_multiselect' => true,
                            ],
                            'finish type' => [
                                'options' => ['Polished', 'Brushed', 'Coated'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Small-Scale Manufacturing' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Batch Production',
                                    'Product Assembly',
                                    'Quality Control',
                                    'Inventory Management',
                                ],
                                'is_multiselect' => true,
                            ],
                            'manufacturing type' => [
                                'options' => [
                                    'Handcrafted',
                                    'Machined',
                                    'Mixed Methods',
                                ],
                                'is_multiselect' => true,
                            ],
                            'certifications' => [
                                'options' => ['ISO Certified', 'CE Marked'],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

            'Automotive Services' => [
                'subcategories' => [
                    'Car Wash & Detailing' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Basic Wash',
                                    'Full-Service Wash',
                                    'Interior Detailing',
                                    'Exterior Detailing',
                                    'Waxing',
                                    'Paint Protection',
                                ],
                                'is_multiselect' => true,
                            ],
                            'detailing package' => [
                                'options' => [
                                    'Standard Package',
                                    'Premium Package',
                                    'Custom Package',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Maintenance & Repairs' => [
                        'subcategories' => [
                            'General Repairs' => [
                                'attributes' => [
                                    'specific services' => [
                                        'options' => [
                                            'Oil Change',
                                            'Brake Repair',
                                            'Battery Replacement',
                                            'Tire Rotation',
                                            'Transmission Services',
                                            'Engine Diagnostics',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                    'repair type' => [
                                        'options' => [
                                            'Scheduled Maintenance',
                                            'Emergency Repairs',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                            'Mobile Mechanic Services' => [
                                'attributes' => [
                                    'specific services' => [
                                        'options' => [
                                            'On-Site Oil Change',
                                            'Brake Repairs',
                                            'Battery Jump-start',
                                        ],
                                        'is_multiselect' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'Vehicle Customization' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Aftermarket Parts Installation',
                                    'Custom Paint Jobs',
                                    'Body Kits Installation',
                                    'Performance Modifications',
                                ],
                                'is_multiselect' => true,
                            ],
                            'customization type' => [
                                'options' => [
                                    'Aesthetic Changes',
                                    'Performance Enhancements',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Glass Repair & Replacement' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Windshield Repair',
                                    'Full Glass Replacement',
                                    'Rock Chip Repair',
                                ],
                                'is_multiselect' => true,
                            ],
                            'glass type' => [
                                'options' => [
                                    'Front Windshield',
                                    'Side Windows',
                                    'Back Window',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Hybrid & Electric Vehicle Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Battery Diagnostics',
                                    'Battery Replacement',
                                    'Hybrid System Maintenance',
                                ],
                                'is_multiselect' => true,
                            ],
                            'vehicle type' => [
                                'options' => [
                                    'Hybrid',
                                    'Electric',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Fleet Maintenance Services' => [
                        'attributes' => [
                            'specific services' => [
                                'options' => [
                                    'Scheduled Inspections',
                                    'Emergency Repairs',
                                    'Fleet Fuel Management',
                                ],
                                'is_multiselect' => true,
                            ],
                            'fleet size' => [
                                'options' => [
                                    'Small Fleet (1-10 vehicles)',
                                    'Medium Fleet (11-50 vehicles)',
                                    'Large Fleet (51+ vehicles)',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                    'Car Auctions' => [
                        'attributes' => [
                            'auction type' => [
                                'options' => [
                                    'Live Auction',
                                    'Online Auction',
                                ],
                                'is_multiselect' => false,
                            ],
                            'services offered' => [
                                'options' => [
                                    'Bid Assistance',
                                    'Vehicle Appraisals',
                                    'Auction Listings',
                                ],
                                'is_multiselect' => true,
                            ],
                        ],
                    ],
                ],
            ],

        ];


        foreach ($categories as $categoryName => $categoryData) {
            $category = Category::create(['name' => $categoryName, 'slug' => Str::slug($categoryName)]);

            foreach ($categoryData['subcategories'] as $subcategoryName => $subcategoryData) {
                $subcategory = Subcategory::create(['name' => $subcategoryName, 'slug' => Str::slug($subcategoryName), 'category_id' => $category->id]);

                // Check for nested subcategories
                if (isset($subcategoryData['subcategories'])) {
                    foreach ($subcategoryData['subcategories'] as $nestedSubcategoryName => $nestedSubcategoryData) {
                        $nestedSubcategory = Subcategory::create([
                            'name' => $nestedSubcategoryName,
                            'slug' => Str::slug($nestedSubcategoryName),
                            'category_id' => $category->id,
                            'parent_id' => $subcategory->id, // Set parent_id to the current subcategory
                        ]);

                        if (isset($nestedSubcategoryData['attributes'])) {
                            foreach ($nestedSubcategoryData['attributes'] as $attributeName => $attributeData) {
                                $attribute = Attribute::create([
                                    'name' => $attributeName,
                                    'is_multiselect' => $attributeData['is_multiselect'],
                                    'attributable_id' => $nestedSubcategory->id,
                                    'attributable_type' => Subcategory::class, // Use the class name of the model
                                ]);
    
    
                                foreach ($attributeData['options'] as $optionName) {
                                    Option::create(['name' => $optionName, 'attribute_id' => $attribute->id]);
                                }
                            }
                        }
                    }
                }

                if (isset($subcategoryData['attributes'])) {
                    foreach ($subcategoryData['attributes'] as $attributeName => $attributeData) {
                        $attribute = Attribute::create([
                            'name' => $attributeName,
                            'is_multiselect' => $attributeData['is_multiselect'],
                            'attributable_id' => $subcategory->id,
                            'attributable_type' => Subcategory::class, // Use the class name of the model
                        ]);
    
                        foreach ($attributeData['options'] as $optionName) {
                            Option::create(['name' => $optionName, 'attribute_id' => $attribute->id]);
                        }
                    }
                }
            }

            // Add category attributes
            if (isset($categoryData['attributes'])) {
                foreach ($categoryData['attributes'] as $attributeName => $attributeData) {
                    $attribute = Attribute::create([
                        'name' => $attributeName,
                        'is_multiselect' => $attributeData['is_multiselect'],
                        'attributable_id' => $category->id,
                        'attributable_type' => Category::class, // Use the class name of the model
                    ]);
    
                    foreach ($attributeData['options'] as $optionName) {
                        Option::create(['name' => $optionName, 'attribute_id' => $attribute->id]);
                    }
                }
            }
        }

    }
}