function biodata(nama, umur) {
    const hobbies = ["learning", "coding", "olahraga"]
    const isMarried = false
    const address = "Jl. Leguti, Lengkong Gudang Timur, Kec. Serpong, Tangerang Selatan"
    const interestInCoding = true

    let about = {
        name: nama,
        age: umur,
        address: address,
        hobbies: hobbies,
        isMarried: isMarried,
        listSchool: {
            sd: [
                {
                    name: 'SDN 2 Katong',
                    year_in: 2003,
                    year_out: 2009,
                    major: null
                }
            ],
            smp: [
                {
                    name: 'SMPN 2 Penawangan',
                    year_in: 2009,
                    year_out: 2012,
                    major: null
                }
            ],
            sma: [
                {
                    name: 'SMAN 1 Toroh',
                    year_in: 2012,
                    year_out: 2015,
                    major: null
                }
            ],
            universitas: [
                {
                    name: 'Universitas Islam Syekh Yusuf',
                    year_in: 2015,
                    year_out: 2019,
                    major: 'Teknik Informatika'
                }
            ]
        },
        skills: {
            web: [
                {
                    skillName: 'Web Design dengan HTML, CSS, JavaScript, Bootstrap dan Web Dev dengan PHP/CodeIgniter dan MySql',
                    level: 'advanced'
                }
            ],
            android: [
                {
                    skillName: 'Java, Kotlin',
                    level: 'beginner'
                }
            ]
        },
        interest_in_coding: interestInCoding
    }
    return JSON.stringify(about)
}

let hasil = biodata("Arda Budi Santoso", 22)
console.log(hasil);