<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employee = [
            [
                "id"=> "1",
                "nama_pegawai"=> "John Doe",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "2",
                "nama_pegawai"=> "Jane Smith",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "3",
                "nama_pegawai"=> "Michael Brown",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "4",
                "nama_pegawai"=> "Emily Johnson",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "5",
                "nama_pegawai"=> "William Lee",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "6",
                "nama_pegawai"=> "Sophia Wang",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Medan"
            ],
            [
                "id"=> "7",
                "nama_pegawai"=> "James Kim",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "8",
                "nama_pegawai"=> "Olivia Chen",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "9",
                "nama_pegawai"=> "Robert Gupta",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "10",
                "nama_pegawai"=> "Emma Rodriguez",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "11",
                "nama_pegawai"=> "Daniel Tan",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "12",
                "nama_pegawai"=> "Ava Liu",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "13",
                "nama_pegawai"=> "David Hernandez",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "14",
                "nama_pegawai"=> "Mia Nguyen",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "15",
                "nama_pegawai"=> "Joseph Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "16",
                "nama_pegawai"=> "Sofia Park",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "17",
                "nama_pegawai"=> "Thomas Kim",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "18",
                "nama_pegawai"=> "Isabella Wong",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "19",
                "nama_pegawai"=> "Liam Chen",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "20",
                "nama_pegawai"=> "Amelia Tan",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "21",
                "nama_pegawai"=> "Benjamin Nguyen",
                "jabatan_id"=> "4",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "22",
                "nama_pegawai"=> "Evelyn Kim",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "23",
                "nama_pegawai"=> "Lucas Wang",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Medan"
            ],
            [
                "id"=> "24",
                "nama_pegawai"=> "Harper Lee",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "25",
                "nama_pegawai"=> "Alexander Hernandez",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "26",
                "nama_pegawai"=> "Abigail Smith",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "27",
                "nama_pegawai"=> "Daniel Nguyen",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "28",
                "nama_pegawai"=> "Madison Kim",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "29",
                "nama_pegawai"=> "Josephine Wang",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "30",
                "nama_pegawai"=> "Henry Tan",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "31",
                "nama_pegawai"=> "Charlotte Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "32",
                "nama_pegawai"=> "Matthew Park",
                "jabatan_id"=> "4",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "33",
                "nama_pegawai"=> "Ella Nguyen",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "34",
                "nama_pegawai"=> "Michaela Wong",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "35",
                "nama_pegawai"=> "Lucas Hernandez",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "36",
                "nama_pegawai"=> "Aria Lee",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "37",
                "nama_pegawai"=> "Daniel Kim",
                "jabatan_id"=> "4",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "38",
                "nama_pegawai"=> "Avery Tan",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "39",
                "nama_pegawai"=> "Benjamin Wang",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "40",
                "nama_pegawai"=> "Sophie Nguyen",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "41",
                "nama_pegawai"=> "Emma Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "42",
                "nama_pegawai"=> "Jackson Park",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "43",
                "nama_pegawai"=> "Samantha Tan",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "44",
                "nama_pegawai"=> "James Hernandez",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "45",
                "nama_pegawai"=> "Lily Chen",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "46",
                "nama_pegawai"=> "Lucas Lee",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "47",
                "nama_pegawai"=> "Chloe Nguyen",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Medan"
            ],
            [
                "id"=> "48",
                "nama_pegawai"=> "Aiden Wang",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "49",
                "nama_pegawai"=> "Mila Kim",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "50",
                "nama_pegawai"=> "Alexander Tan",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "51",
                "nama_pegawai"=> "Luna Smith",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "52",
                "nama_pegawai"=> "Oliver Park",
                "jabatan_id"=> "4",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "53",
                "nama_pegawai"=> "Scarlett Hernandez",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "54",
                "nama_pegawai"=> "Avery Lee",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "55",
                "nama_pegawai"=> "Ella Kim",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "56",
                "nama_pegawai"=> "Elijah Nguyen",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "57",
                "nama_pegawai"=> "Eva Wang",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "58",
                "nama_pegawai"=> "Mason Park",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "59",
                "nama_pegawai"=> "Abigail Tan",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "60",
                "nama_pegawai"=> "Ethan Kim",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "61",
                "nama_pegawai"=> "Aria Hernandez",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "62",
                "nama_pegawai"=> "Emily Lee",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "63",
                "nama_pegawai"=> "Carter Nguyen",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "64",
                "nama_pegawai"=> "Elizabeth Wang",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "65",
                "nama_pegawai"=> "Sebastian Tan",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "66",
                "nama_pegawai"=> "Addison Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "67",
                "nama_pegawai"=> "Grace Park",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "68",
                "nama_pegawai"=> "Henry Hernandez",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "69",
                "nama_pegawai"=> "Evelyn Nguyen",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "70",
                "nama_pegawai"=> "Eli Lee",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "71",
                "nama_pegawai"=> "Aria Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "72",
                "nama_pegawai"=> "Amelia Park",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "73",
                "nama_pegawai"=> "Gabriel Tan",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "74",
                "nama_pegawai"=> "Scarlett Hernandez",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "75",
                "nama_pegawai"=> "Avery Lee",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "76",
                "nama_pegawai"=> "Chloe Nguyen",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "77",
                "nama_pegawai"=> "Eli Wang",
                "jabatan_id"=> "4",
                "jk_id"=> "1",
                "alamat"=> "Medan"
            ],
            [
                "id"=> "78",
                "nama_pegawai"=> "Grace Kim",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "79",
                "nama_pegawai"=> "Oliver Park",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "80",
                "nama_pegawai"=> "Charlotte Nguyen",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "81",
                "nama_pegawai"=> "Daniel Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "82",
                "nama_pegawai"=> "Lily Park",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "83",
                "nama_pegawai"=> "Ella Tan",
                "jabatan_id"=> "2",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "84",
                "nama_pegawai"=> "Noah Hernandez",
                "jabatan_id"=> "1",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "85",
                "nama_pegawai"=> "Evelyn Lee",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "86",
                "nama_pegawai"=> "Elijah Nguyen",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "87",
                "nama_pegawai"=> "Eva Wang",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Yogyakarta"
            ],
            [
                "id"=> "88",
                "nama_pegawai"=> "Mason Park",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "89",
                "nama_pegawai"=> "Abigail Tan",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "90",
                "nama_pegawai"=> "Ethan Kim",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "91",
                "nama_pegawai"=> "Aria Hernandez",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "92",
                "nama_pegawai"=> "Emily Lee",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "93",
                "nama_pegawai"=> "Carter Nguyen",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "94",
                "nama_pegawai"=> "Elizabeth Wang",
                "jabatan_id"=> "1",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "95",
                "nama_pegawai"=> "Sebastian Tan",
                "jabatan_id"=> "3",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "96",
                "nama_pegawai"=> "Addison Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "2",
                "alamat"=> "Semarang"
            ],
            [
                "id"=> "97",
                "nama_pegawai"=> "Sophia Tan",
                "jabatan_id"=> "4",
                "jk_id"=> "2",
                "alamat"=> "Surabaya"
            ],
            [
                "id"=> "98",
                "nama_pegawai"=> "Daniel Kim",
                "jabatan_id"=> "5",
                "jk_id"=> "1",
                "alamat"=> "Jakarta"
            ],
            [
                "id"=> "99",
                "nama_pegawai"=> "Isabella Lee",
                "jabatan_id"=> "3",
                "jk_id"=> "2",
                "alamat"=> "Bandung"
            ],
            [
                "id"=> "100",
                "nama_pegawai"=> "Aiden Nguyen",
                "jabatan_id"=> "2",
                "jk_id"=> "1",
                "alamat"=> "Yogyakarta"
            ]
            ];
            Employee::insert($employee);   
        
}
}
