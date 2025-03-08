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
        $departments = DB::table('departments')
            ->pluck('id', 'name');

        $humanResourcesId = $departments['Human Resources'] ?? null;
        $financesId = $departments['Finances'] ?? null;
        $marketingId = $departments['Marketing'] ?? null;
        $salesId = $departments['Sales'] ?? null;
        $itId = $departments['IT'] ?? null;
        $customerSupportId = $departments['Customer Support'] ?? null;
        $legalId = $departments['Legal'] ?? null;
        $operationId = $departments['Operations'] ?? null;
        $researchId = $departments['Research and Development'] ?? null;
        $procurementId = $departments['Procurement'] ?? null;
        $publicRelationId = $departments['Public Relations'] ?? null;
        $securityId = $departments['Security'] ?? null;
        $qualityId = $departments['Quality Assurance'] ?? null;
        $logisticId = $departments['Logistics'] ?? null;
        $productManagementId = $departments['Product Management'] ?? null;
        $businessDevelopmentId = $departments['Business Development'] ?? null;
        $complianceId = $departments['Compliance'] ?? null;
        $trainingId = $departments['Training and Development'] ?? null;
        $corporateId = $departments['Corporate Strategy'] ?? null;
        $facilitiesId = $departments['Facilities Management'] ?? null;

        $names = [
            // Human Resources
            [
                'name' => 'HR Coordinator',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 40000.00,
                'salary_range_max' => 60000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HR Specialist',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Recruitment Manager',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Talent Acquisition Specialist',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HR Director',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Employee Relations Manager',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Compensation Analyst',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Training Coordinator',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HR Generalist',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 52000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Benefits Administrator',
                'department_id' => $humanResourcesId,
                'salary_range_min' => 48000.00,
                'salary_range_max' => 72000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Finance
            [
                'name' => 'Financial Analyst',
                'department_id' => $financesId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Accountant',
                'department_id' => $financesId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Finance Manager',
                'department_id' => $financesId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Budget Analyst',
                'department_id' => $financesId,
                'salary_range_min' => 58000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Auditor',
                'department_id' => $financesId,
                'salary_range_min' => 62000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Payroll Specialist',
                'department_id' => $financesId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Financial Controller',
                'department_id' => $financesId,
                'salary_range_min' => 100000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Investment Analyst',
                'department_id' => $financesId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Treasurer',
                'department_id' => $financesId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Financial Officer',
                'department_id' => $financesId,
                'salary_range_min' => 150000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // IT
            [
                'name' => 'Software Engineer',
                'department_id' => $itId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'System Administrator',
                'department_id' => $itId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cybersecurity Specialist',
                'department_id' => $itId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'IT Support Technician',
                'department_id' => $itId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cloud Engineer',
                'department_id' => $itId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'DevOps Engineer',
                'department_id' => $itId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 135000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Machine Learning Engineer',
                'department_id' => $itId,
                'salary_range_min' => 100000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Database Administrator',
                'department_id' => $itId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Network Engineer',
                'department_id' => $itId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Technology Officer',
                'department_id' => $itId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Marketing
            [
                'name' => 'Marketing Coordinator',
                'department_id' => $marketingId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Digital Marketing Manager',
                'department_id' => $marketingId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Content Strategist',
                'department_id' => $marketingId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SEO Specialist',
                'department_id' => $marketingId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Social Media Manager',
                'department_id' => $marketingId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Brand Manager',
                'department_id' => $marketingId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Public Relations Specialist',
                'department_id' => $marketingId,
                'salary_range_min' => 48000.00,
                'salary_range_max' => 78000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Email Marketing Specialist',
                'department_id' => $marketingId,
                'salary_range_min' => 53000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Creative Director',
                'department_id' => $marketingId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Marketing Officer',
                'department_id' => $marketingId,
                'salary_range_min' => 130000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Sales
            [
                'name' => 'Sales Representative',
                'department_id' => $salesId,
                'salary_range_min' => 40000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Key Account Manager',
                'department_id' => $salesId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sales Director',
                'department_id' => $salesId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Business Development Manager',
                'department_id' => $salesId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inside Sales Representative',
                'department_id' => $salesId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sales Engineer',
                'department_id' => $salesId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Success Manager',
                'department_id' => $salesId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 105000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lead Generation Specialist',
                'department_id' => $salesId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Territory Sales Manager',
                'department_id' => $salesId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 135000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Sales Officer',
                'department_id' => $salesId,
                'salary_range_min' => 140000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Operations
            [
                'name' => 'Operations Manager',
                'department_id' => $operationId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Supply Chain Analyst',
                'department_id' => $operationId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Logistics Coordinator',
                'department_id' => $operationId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Warehouse Manager',
                'department_id' => $operationId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inventory Control Specialist',
                'department_id' => $operationId,
                'salary_range_min' => 48000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Process Improvement Analyst',
                'department_id' => $operationId,
                'salary_range_min' => 68000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fleet Manager',
                'department_id' => $operationId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Project Coordinator',
                'department_id' => $operationId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Compliance Officer',
                'department_id' => $operationId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Customer Support
            [
                'name' => 'Customer Support Representative',
                'department_id' => $customerSupportId,
                'salary_range_min' => 35000.00,
                'salary_range_max' => 55000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Success Manager',
                'department_id' => $customerSupportId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Support Specialist',
                'department_id' => $customerSupportId,
                'salary_range_min' => 40000.00,
                'salary_range_max' => 65000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Technical Support Engineer',
                'department_id' => $customerSupportId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Help Desk Analyst',
                'department_id' => $customerSupportId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Experience Specialist',
                'department_id' => $customerSupportId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Call Center Supervisor',
                'department_id' => $customerSupportId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Service Trainer',
                'department_id' => $customerSupportId,
                'salary_range_min' => 48000.00,
                'salary_range_max' => 78000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Escalation Manager',
                'department_id' => $customerSupportId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'VP of Customer Support',
                'department_id' => $customerSupportId,
                'salary_range_min' => 120000.00,
                'salary_range_max' => 200000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Legal
            [
                'name' => 'Legal Assistant',
                'department_id' => $legalId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Paralegal',
                'department_id' => $legalId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Corporate Counsel',
                'department_id' => $legalId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Compliance Officer',
                'department_id' => $legalId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Intellectual Property Attorney',
                'department_id' => $legalId,
                'salary_range_min' => 100000.00,
                'salary_range_max' => 180000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Employment Lawyer',
                'department_id' => $legalId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Contract Manager',
                'department_id' => $legalId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Data Privacy Officer',
                'department_id' => $legalId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Regulatory Affairs Specialist',
                'department_id' => $legalId,
                'salary_range_min' => 68000.00,
                'salary_range_max' => 115000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Legal Officer',
                'department_id' => $legalId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Research and Development
            [
                'name' => 'R&D Engineer',
                'department_id' => $researchId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Research Scientist',
                'department_id' => $researchId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Product Development Manager',
                'department_id' => $researchId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Innovation Strategist',
                'department_id' => $researchId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Materials Scientist',
                'department_id' => $researchId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Clinical Research Associate',
                'department_id' => $researchId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Data Scientist',
                'department_id' => $researchId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Prototype Engineer',
                'department_id' => $researchId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'R&D Project Manager',
                'department_id' => $researchId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 170000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Innovation Officer',
                'department_id' => $researchId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Procurement
            [
                'name' => 'Procurement Coordinator',
                'department_id' => $procurementId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Purchasing Manager',
                'department_id' => $procurementId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Vendor Manager',
                'department_id' => $procurementId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Supply Chain Analyst',
                'department_id' => $procurementId,
                'salary_range_min' => 58000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Logistics Specialist',
                'department_id' => $procurementId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Procurement Officer',
                'department_id' => $procurementId,
                'salary_range_min' => 62000.00,
                'salary_range_max' => 98000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inventory Control Manager',
                'department_id' => $procurementId,
                'salary_range_min' => 68000.00,
                'salary_range_max' => 105000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Sourcing Specialist',
                'department_id' => $procurementId,
                'salary_range_min' => 53000.00,
                'salary_range_max' => 87000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Contract Negotiator',
                'department_id' => $procurementId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Procurement Officer',
                'department_id' => $procurementId,
                'salary_range_min' => 150000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Public Relations
            [
                'name' => 'Public Relations Specialist',
                'department_id' => $publicRelationId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Communications Manager',
                'department_id' => $publicRelationId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Media Relations Coordinator',
                'department_id' => $publicRelationId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Crisis Communications Manager',
                'department_id' => $publicRelationId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Social Media Strategist',
                'department_id' => $publicRelationId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Corporate Communications Director',
                'department_id' => $publicRelationId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Event Coordinator',
                'department_id' => $publicRelationId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Brand Reputation Manager',
                'department_id' => $publicRelationId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Speechwriter',
                'department_id' => $publicRelationId,
                'salary_range_min' => 68000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Communications Officer',
                'department_id' => $publicRelationId,
                'salary_range_min' => 140000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Quality Assurance
            [
                'name' => 'Quality Assurance Analyst',
                'department_id' => $qualityId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'QA Engineer',
                'department_id' => $qualityId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Software Tester',
                'department_id' => $qualityId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Process Improvement Analyst',
                'department_id' => $qualityId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 115000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Compliance Auditor',
                'department_id' => $qualityId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 125000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'QA Manager',
                'department_id' => $qualityId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Supplier Quality Engineer',
                'department_id' => $qualityId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 115000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Six Sigma Consultant',
                'department_id' => $qualityId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Regulatory Compliance Manager',
                'department_id' => $qualityId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Quality Officer',
                'department_id' => $qualityId,
                'salary_range_min' => 150000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Security
            [
                'name' => 'Security Analyst',
                'department_id' => $securityId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Cybersecurity Engineer',
                'department_id' => $securityId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'IT Security Manager',
                'department_id' => $securityId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Risk Management Specialist',
                'department_id' => $securityId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 125000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Physical Security Officer',
                'department_id' => $securityId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Incident Response Manager',
                'department_id' => $securityId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Compliance and Security Auditor',
                'department_id' => $securityId,
                'salary_range_min' => 78000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Penetration Tester',
                'department_id' => $securityId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Information Security Officer',
                'department_id' => $securityId,
                'salary_range_min' => 150000.00,
                'salary_range_max' => 280000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Logistics
            [
                'name' => 'Logistics Coordinator',
                'department_id' => $logisticId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Supply Chain Manager',
                'department_id' => $logisticId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Freight Analyst',
                'department_id' => $logisticId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fleet Operations Manager',
                'department_id' => $logisticId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Warehouse Operations Supervisor',
                'department_id' => $logisticId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 90000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Inventory Control Specialist',
                'department_id' => $logisticId,
                'salary_range_min' => 62000.00,
                'salary_range_max' => 98000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Logistics Engineer',
                'department_id' => $logisticId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 125000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Distribution Manager',
                'department_id' => $logisticId,
                'salary_range_min' => 78000.00,
                'salary_range_max' => 135000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Global Logistics Director',
                'department_id' => $logisticId,
                'salary_range_min' => 120000.00,
                'salary_range_max' => 220000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Corporate Strategy
            [
                'name' => 'Corporate Strategist',
                'department_id' => $corporateId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Business Intelligence Analyst',
                'department_id' => $corporateId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Market Research Analyst',
                'department_id' => $corporateId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 105000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Competitive Intelligence Manager',
                'department_id' => $corporateId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Strategic Planning Associate',
                'department_id' => $corporateId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 115000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Growth Strategy Consultant',
                'department_id' => $corporateId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Mergers and Acquisitions Analyst',
                'department_id' => $corporateId,
                'salary_range_min' => 100000.00,
                'salary_range_max' => 170000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Corporate Development Manager',
                'department_id' => $corporateId,
                'salary_range_min' => 110000.00,
                'salary_range_max' => 180000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Strategy Officer',
                'department_id' => $corporateId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Product Management
            [
                'name' => 'Product Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Associate Product Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Senior Product Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 100000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Product Owner',
                'department_id' => $productManagementId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Technical Product Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Lead Product Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 110000.00,
                'salary_range_max' => 180000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Head of Product',
                'department_id' => $productManagementId,
                'salary_range_min' => 130000.00,
                'salary_range_max' => 200000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Product Marketing Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Growth Product Manager',
                'department_id' => $productManagementId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Product Officer',
                'department_id' => $productManagementId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Business Development
            [
                'name' => 'Business Development Representative',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Business Development Manager',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Strategic Partnerships Manager',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Enterprise Sales Executive',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Market Expansion Analyst',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Corporate Development Manager',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 110000.00,
                'salary_range_max' => 180000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Business Strategy Consultant',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Channel Sales Manager',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Key Account Manager',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Business Development Officer',
                'department_id' => $businessDevelopmentId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Compliance
            [
                'name' => 'Compliance Analyst',
                'department_id' => $complianceId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Regulatory Affairs Specialist',
                'department_id' => $complianceId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Risk Management Officer',
                'department_id' => $complianceId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Audit and Compliance Manager',
                'department_id' => $complianceId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 160000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Data Privacy Officer',
                'department_id' => $complianceId,
                'salary_range_min' => 90000.00,
                'salary_range_max' => 150000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Corporate Governance Analyst',
                'department_id' => $complianceId,
                'salary_range_min' => 78000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Fraud Prevention Specialist',
                'department_id' => $complianceId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 115000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Internal Auditor',
                'department_id' => $complianceId,
                'salary_range_min' => 85000.00,
                'salary_range_max' => 140000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Ethics and Compliance Officer',
                'department_id' => $complianceId,
                'salary_range_min' => 95000.00,
                'salary_range_max' => 170000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Compliance Officer',
                'department_id' => $complianceId,
                'salary_range_min' => 180000.00,
                'salary_range_max' => 300000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Training and Development
            [
                'name' => 'Training Coordinator',
                'department_id' => $trainingId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Learning and Development Specialist',
                'department_id' => $trainingId,
                'salary_range_min' => 55000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Corporate Trainer',
                'department_id' => $trainingId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Instructional Designer',
                'department_id' => $trainingId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 100000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'HR Training Manager',
                'department_id' => $trainingId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'E-learning Specialist',
                'department_id' => $trainingId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 110000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Professional Development Coach',
                'department_id' => $trainingId,
                'salary_range_min' => 68000.00,
                'salary_range_max' => 105000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Talent Development Manager',
                'department_id' => $trainingId,
                'salary_range_min' => 80000.00,
                'salary_range_max' => 130000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Onboarding Specialist',
                'department_id' => $trainingId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 80000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Chief Learning Officer',
                'department_id' => $trainingId,
                'salary_range_min' => 150000.00,
                'salary_range_max' => 250000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Facilities Management
            [
                'name' => 'Facilities Manager',
                'department_id' => $facilitiesId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Building Maintenance Supervisor',
                'department_id' => $facilitiesId,
                'salary_range_min' => 50000.00,
                'salary_range_max' => 85000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Operations and Maintenance Technician',
                'department_id' => $facilitiesId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 75000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Workplace Safety Coordinator',
                'department_id' => $facilitiesId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 95000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Energy Manager',
                'department_id' => $facilitiesId,
                'salary_range_min' => 75000.00,
                'salary_range_max' => 120000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Space Planning Specialist',
                'department_id' => $facilitiesId,
                'salary_range_min' => 65000.00,
                'salary_range_max' => 105000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Janitorial Services Supervisor',
                'department_id' => $facilitiesId,
                'salary_range_min' => 45000.00,
                'salary_range_max' => 70000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Security and Facility Compliance Officer',
                'department_id' => $facilitiesId,
                'salary_range_min' => 70000.00,
                'salary_range_max' => 115000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Property Management Coordinator',
                'department_id' => $facilitiesId,
                'salary_range_min' => 60000.00,
                'salary_range_max' => 98000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Director of Facilities',
                'department_id' => $facilitiesId,
                'salary_range_min' => 130000.00,
                'salary_range_max' => 220000.00,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        DB::table('positions')->insert($names);
    }
}
