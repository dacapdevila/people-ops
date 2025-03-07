<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            // Human Resources
            ['name' => 'HR Coordinator', 'salary_range_min' => 40000.00, 'salary_range_max' => 60000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HR Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Recruitment Manager', 'salary_range_min' => 60000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Talent Acquisition Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HR Director', 'salary_range_min' => 90000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Employee Relations Manager', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compensation Analyst', 'salary_range_min' => 55000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Training Coordinator', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HR Generalist', 'salary_range_min' => 52000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Benefits Administrator', 'salary_range_min' => 48000.00, 'salary_range_max' => 72000.00, 'created_at' => now(), 'updated_at' => now()],

            // Finance
            ['name' => 'Financial Analyst', 'salary_range_min' => 55000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Accountant', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Finance Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Budget Analyst', 'salary_range_min' => 58000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Auditor', 'salary_range_min' => 62000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Payroll Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Financial Controller', 'salary_range_min' => 100000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Investment Analyst', 'salary_range_min' => 75000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Treasurer', 'salary_range_min' => 85000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Financial Officer', 'salary_range_min' => 150000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // IT
            ['name' => 'Software Engineer', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'System Administrator', 'salary_range_min' => 60000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cybersecurity Specialist', 'salary_range_min' => 80000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Support Technician', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cloud Engineer', 'salary_range_min' => 90000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'DevOps Engineer', 'salary_range_min' => 85000.00, 'salary_range_max' => 135000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Machine Learning Engineer', 'salary_range_min' => 100000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Database Administrator', 'salary_range_min' => 75000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Network Engineer', 'salary_range_min' => 65000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Technology Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Marketing
            ['name' => 'Marketing Coordinator', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Digital Marketing Manager', 'salary_range_min' => 60000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Content Strategist', 'salary_range_min' => 50000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'SEO Specialist', 'salary_range_min' => 55000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Social Media Manager', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brand Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Public Relations Specialist', 'salary_range_min' => 48000.00, 'salary_range_max' => 78000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Email Marketing Specialist', 'salary_range_min' => 53000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Creative Director', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Marketing Officer', 'salary_range_min' => 130000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // Sales
            ['name' => 'Sales Representative', 'salary_range_min' => 40000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Key Account Manager', 'salary_range_min' => 65000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sales Director', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Development Manager', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Inside Sales Representative', 'salary_range_min' => 45000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sales Engineer', 'salary_range_min' => 75000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Success Manager', 'salary_range_min' => 65000.00, 'salary_range_max' => 105000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lead Generation Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Territory Sales Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 135000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Sales Officer', 'salary_range_min' => 140000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // Operations
            ['name' => 'Operations Manager', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supply Chain Analyst', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Logistics Coordinator', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse Manager', 'salary_range_min' => 65000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Inventory Control Specialist', 'salary_range_min' => 48000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Process Improvement Analyst', 'salary_range_min' => 68000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fleet Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Project Coordinator', 'salary_range_min' => 55000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compliance Officer', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],

            // Customer Support
            ['name' => 'Customer Support Representative', 'salary_range_min' => 35000.00, 'salary_range_max' => 55000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Success Manager', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Support Specialist', 'salary_range_min' => 40000.00, 'salary_range_max' => 65000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Technical Support Engineer', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Help Desk Analyst', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Experience Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Call Center Supervisor', 'salary_range_min' => 55000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Customer Service Trainer', 'salary_range_min' => 48000.00, 'salary_range_max' => 78000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Escalation Manager', 'salary_range_min' => 70000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'VP of Customer Support', 'salary_range_min' => 120000.00, 'salary_range_max' => 200000.00, 'created_at' => now(), 'updated_at' => now()],

            // Legal
            ['name' => 'Legal Assistant', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Paralegal', 'salary_range_min' => 50000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Counsel', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compliance Officer', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Intellectual Property Attorney', 'salary_range_min' => 100000.00, 'salary_range_max' => 180000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Employment Lawyer', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Contract Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Privacy Officer', 'salary_range_min' => 95000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Regulatory Affairs Specialist', 'salary_range_min' => 68000.00, 'salary_range_max' => 115000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Legal Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Research and Development
            ['name' => 'R&D Engineer', 'salary_range_min' => 80000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Research Scientist', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Development Manager', 'salary_range_min' => 95000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Innovation Strategist', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Materials Scientist', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Clinical Research Associate', 'salary_range_min' => 70000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Scientist', 'salary_range_min' => 90000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Prototype Engineer', 'salary_range_min' => 80000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'R&D Project Manager', 'salary_range_min' => 95000.00, 'salary_range_max' => 170000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Innovation Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Procurement
            ['name' => 'Procurement Coordinator', 'salary_range_min' => 50000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Purchasing Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Vendor Manager', 'salary_range_min' => 60000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supply Chain Analyst', 'salary_range_min' => 58000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Logistics Specialist', 'salary_range_min' => 55000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Procurement Officer', 'salary_range_min' => 62000.00, 'salary_range_max' => 98000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Inventory Control Manager', 'salary_range_min' => 68000.00, 'salary_range_max' => 105000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Sourcing Specialist', 'salary_range_min' => 53000.00, 'salary_range_max' => 87000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Contract Negotiator', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Procurement Officer', 'salary_range_min' => 150000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // Public Relations
            ['name' => 'Public Relations Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Communications Manager', 'salary_range_min' => 70000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Media Relations Coordinator', 'salary_range_min' => 55000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Crisis Communications Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Social Media Strategist', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Communications Director', 'salary_range_min' => 90000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Event Coordinator', 'salary_range_min' => 45000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Brand Reputation Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Speechwriter', 'salary_range_min' => 68000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Communications Officer', 'salary_range_min' => 140000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // Quality Assurance
            ['name' => 'Quality Assurance Analyst', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'QA Engineer', 'salary_range_min' => 60000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Software Tester', 'salary_range_min' => 55000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Process Improvement Analyst', 'salary_range_min' => 70000.00, 'salary_range_max' => 115000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compliance Auditor', 'salary_range_min' => 75000.00, 'salary_range_max' => 125000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'QA Manager', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supplier Quality Engineer', 'salary_range_min' => 70000.00, 'salary_range_max' => 115000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Six Sigma Consultant', 'salary_range_min' => 95000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Regulatory Compliance Manager', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Quality Officer', 'salary_range_min' => 150000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // Security
            ['name' => 'Security Analyst', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cybersecurity Engineer', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'IT Security Manager', 'salary_range_min' => 90000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Risk Management Specialist', 'salary_range_min' => 75000.00, 'salary_range_max' => 125000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Physical Security Officer', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Incident Response Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Compliance and Security Auditor', 'salary_range_min' => 78000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Penetration Tester', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Information Security Officer', 'salary_range_min' => 150000.00, 'salary_range_max' => 280000.00, 'created_at' => now(), 'updated_at' => now()],

            // Logistics
            ['name' => 'Logistics Coordinator', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Supply Chain Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Freight Analyst', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fleet Operations Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Warehouse Operations Supervisor', 'salary_range_min' => 55000.00, 'salary_range_max' => 90000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Inventory Control Specialist', 'salary_range_min' => 62000.00, 'salary_range_max' => 98000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Logistics Engineer', 'salary_range_min' => 75000.00, 'salary_range_max' => 125000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Distribution Manager', 'salary_range_min' => 78000.00, 'salary_range_max' => 135000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Global Logistics Director', 'salary_range_min' => 120000.00, 'salary_range_max' => 220000.00, 'created_at' => now(), 'updated_at' => now()],

            // Corporate Strategy
            ['name' => 'Corporate Strategist', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Intelligence Analyst', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Market Research Analyst', 'salary_range_min' => 65000.00, 'salary_range_max' => 105000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Competitive Intelligence Manager', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Strategic Planning Associate', 'salary_range_min' => 70000.00, 'salary_range_max' => 115000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Growth Strategy Consultant', 'salary_range_min' => 95000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Mergers and Acquisitions Analyst', 'salary_range_min' => 100000.00, 'salary_range_max' => 170000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Development Manager', 'salary_range_min' => 110000.00, 'salary_range_max' => 180000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Strategy Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Product Management
            ['name' => 'Product Manager', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Associate Product Manager', 'salary_range_min' => 60000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Senior Product Manager', 'salary_range_min' => 100000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Owner', 'salary_range_min' => 75000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Technical Product Manager', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Lead Product Manager', 'salary_range_min' => 110000.00, 'salary_range_max' => 180000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Head of Product', 'salary_range_min' => 130000.00, 'salary_range_max' => 200000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Product Marketing Manager', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Growth Product Manager', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Product Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Business Development
            ['name' => 'Business Development Representative', 'salary_range_min' => 55000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Development Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Strategic Partnerships Manager', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Enterprise Sales Executive', 'salary_range_min' => 95000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Market Expansion Analyst', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Development Manager', 'salary_range_min' => 110000.00, 'salary_range_max' => 180000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Business Strategy Consultant', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Channel Sales Manager', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Key Account Manager', 'salary_range_min' => 65000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Business Development Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Compliance
            ['name' => 'Compliance Analyst', 'salary_range_min' => 70000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Regulatory Affairs Specialist', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Risk Management Officer', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Audit and Compliance Manager', 'salary_range_min' => 95000.00, 'salary_range_max' => 160000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Data Privacy Officer', 'salary_range_min' => 90000.00, 'salary_range_max' => 150000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Governance Analyst', 'salary_range_min' => 78000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Fraud Prevention Specialist', 'salary_range_min' => 70000.00, 'salary_range_max' => 115000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Internal Auditor', 'salary_range_min' => 85000.00, 'salary_range_max' => 140000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Ethics and Compliance Officer', 'salary_range_min' => 95000.00, 'salary_range_max' => 170000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Compliance Officer', 'salary_range_min' => 180000.00, 'salary_range_max' => 300000.00, 'created_at' => now(), 'updated_at' => now()],

            // Training and Development
            ['name' => 'Training Coordinator', 'salary_range_min' => 50000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Learning and Development Specialist', 'salary_range_min' => 55000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Corporate Trainer', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Instructional Designer', 'salary_range_min' => 65000.00, 'salary_range_max' => 100000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'HR Training Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'E-learning Specialist', 'salary_range_min' => 70000.00, 'salary_range_max' => 110000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Professional Development Coach', 'salary_range_min' => 68000.00, 'salary_range_max' => 105000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Talent Development Manager', 'salary_range_min' => 80000.00, 'salary_range_max' => 130000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Onboarding Specialist', 'salary_range_min' => 50000.00, 'salary_range_max' => 80000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Chief Learning Officer', 'salary_range_min' => 150000.00, 'salary_range_max' => 250000.00, 'created_at' => now(), 'updated_at' => now()],

            // Facilities Management
            ['name' => 'Facilities Manager', 'salary_range_min' => 70000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Building Maintenance Supervisor', 'salary_range_min' => 50000.00, 'salary_range_max' => 85000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Operations and Maintenance Technician', 'salary_range_min' => 45000.00, 'salary_range_max' => 75000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Workplace Safety Coordinator', 'salary_range_min' => 60000.00, 'salary_range_max' => 95000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Energy Manager', 'salary_range_min' => 75000.00, 'salary_range_max' => 120000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Space Planning Specialist', 'salary_range_min' => 65000.00, 'salary_range_max' => 105000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Janitorial Services Supervisor', 'salary_range_min' => 45000.00, 'salary_range_max' => 70000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Security and Facility Compliance Officer', 'salary_range_min' => 70000.00, 'salary_range_max' => 115000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Property Management Coordinator', 'salary_range_min' => 60000.00, 'salary_range_max' => 98000.00, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Director of Facilities', 'salary_range_min' => 130000.00, 'salary_range_max' => 220000.00, 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('positions')->insert($names);
    }
}
