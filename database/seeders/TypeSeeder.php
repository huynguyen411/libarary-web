<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    // protected $arr = [
    //     [
    //         "code" => "000",
    //         "name" => "Generalities",
    //     ],
    //     [
    //         "code" => "100",
    //         "name" => "Philosophy and Psychology",
    //     ],
    //     [
    //         "code" => "200",
    //         "name" => "Religion",
    //     ],
    //     [
    //         "code" => "300",
    //         "name" => "Social Sciences",
    //     ],
    //     [
    //         "code" => "400",
    //         "name" => "Language",
    //     ],
    //     [
    //         "code" => "500",
    //         "name" => "Natural Sciences and Math",
    //     ],
    //     [
    //         "code" => "600",
    //         "name" => "Technology",
    //     ],
    //     [
    //         "code" => "700",
    //         "name" => "The Arts",
    //     ],
    //     [
    //         "code" => "800",
    //         "name" => "Literature",
    //     ],
    //     [
    //         "code" => "900",
    //         "name" => "Geography, History and Biography",
    //     ],
    // ];


    //test 
    protected $arr = [[
        'code' => '000',
        'name' => 'Computer science, information & general works',
    ], [
        'code' => '001',
        'name' => 'Knowledge',
    ], [
        'code' => '002',
        'name' => 'The book',
    ], [
        'code' => '003',
        'name' => 'Systems',
    ], [
        'code' => '004',
        'name' => 'Data processing & computer science',
    ], [
        'code' => '005',
        'name' => 'Computer programming, programs & data',
    ], [
        'code' => '006',
        'name' => 'Special computer methods',
    ], [
        'code' => '007',
        'name' => '[Unassigned]',
    ], [
        'code' => '008',
        'name' => '[Unassigned]',
    ], [
        'code' => '009',
        'name' => '[Unassigned]',
    ], [
        'code' => '010',
        'name' => 'Bibliography',
    ], [
        'code' => '011',
        'name' => 'Bibliographies',
    ], [
        'code' => '012',
        'name' => 'Bibliographies of individuals',
    ], [
        'code' => '013',
        'name' => '[Unassigned]',
    ], [
        'code' => '014',
        'name' => 'Of anonymous & pseudonymous works',
    ], [
        'code' => '015',
        'name' => 'Bibliographies of works from specific places',
    ], [
        'code' => '016',
        'name' => 'Bibliographies of works on specific subjects',
    ], [
        'code' => '017',
        'name' => 'General subject catalogs',
    ], [
        'code' => '018',
        'name' => 'Catalogs arranged by author, date, etc.',
    ], [
        'code' => '019',
        'name' => 'Dictionary catalogs',
    ], [
        'code' => '020',
        'name' => 'Library & information sciences',
    ], [
        'code' => '021',
        'name' => 'Library relationships',
    ], [
        'code' => '022',
        'name' => 'Administration of physical plant',
    ], [
        'code' => '023',
        'name' => 'Personnel management',
    ], [
        'code' => '024',
        'name' => '[Unassigned]',
    ], [
        'code' => '025',
        'name' => 'Library operations',
    ], [
        'code' => '026',
        'name' => 'Libraries for specific subjects',
    ], [
        'code' => '027',
        'name' => 'General libraries',
    ], [
        'code' => '028',
        'name' => 'Reading & use of other information media',
    ], [
        'code' => '029',
        'name' => '[Unassigned]',
    ], [
        'code' => '030',
        'name' => 'General encyclopedic works',
    ], [
        'code' => '031',
        'name' => 'Encyclopedias in American English',
    ], [
        'code' => '032',
        'name' => 'Encyclopedias in English',
    ], [
        'code' => '033',
        'name' => 'In other Germanic languages',
    ], [
        'code' => '034',
        'name' => 'Encyclopedias in French, Occitan & Catalan',
    ], [
        'code' => '035',
        'name' => 'In Italian, Romanian & related languages',
    ], [
        'code' => '036',
        'name' => 'Encyclopedias in Spanish & Portuguese',
    ], [
        'code' => '037',
        'name' => 'Encyclopedias in Slavic languages',
    ], [
        'code' => '038',
        'name' => 'Encyclopedias in Scandinavian languages',
    ], [
        'code' => '039',
        'name' => 'Encyclopedias in other languages',
    ], [
        'code' => '040',
        'name' => '[Unassigned]',
    ], [
        'code' => '041',
        'name' => '[Unassigned]',
    ], [
        'code' => '042',
        'name' => '[Unassigned]',
    ], [
        'code' => '043',
        'name' => '[Unassigned]',
    ], [
        'code' => '044',
        'name' => '[Unassigned]',
    ], [
        'code' => '045',
        'name' => '[Unassigned]',
    ], [
        'code' => '046',
        'name' => '[Unassigned]',
    ], [
        'code' => '047',
        'name' => '[Unassigned]',
    ], [
        'code' => '048',
        'name' => '[Unassigned]',
    ], [
        'code' => '049',
        'name' => '[Unassigned]',
    ], [
        'code' => '050',
        'name' => 'General serial publications',
    ], [
        'code' => '051',
        'name' => 'Serials in American English',
    ], [
        'code' => '052',
        'name' => 'Serials in English',
    ], [
        'code' => '053',
        'name' => 'Serials in other Germanic languages',
    ], [
        'code' => '054',
        'name' => 'Serials in French, Occitan & Catalan',
    ], [
        'code' => '055',
        'name' => 'In Italian, Romanian & related languages',
    ], [
        'code' => '056',
        'name' => 'Serials in Spanish & Portuguese',
    ], [
        'code' => '057',
        'name' => 'Serials in Slavic languages',
    ], [
        'code' => '058',
        'name' => 'Serials in Scandinavian languages',
    ], [
        'code' => '059',
        'name' => 'Serials in other languages',
    ], [
        'code' => '060',
        'name' => 'General organizations & museum science',
    ], [
        'code' => '061',
        'name' => 'Organizations in North America',
    ], [
        'code' => '062',
        'name' => 'Organizations in British Isles; in England',
    ], [
        'code' => '063',
        'name' => 'Organizations in central Europe; in Germany',
    ], [
        'code' => '064',
        'name' => 'Organizations in France & Monaco',
    ], [
        'code' => '065',
        'name' => 'Organizations in Italy & adjacent islands',
    ], [
        'code' => '066',
        'name' => 'In Iberian Peninsula & adjacent islands',
    ], [
        'code' => '067',
        'name' => 'Organizations in eastern Europe; in Russia',
    ], [
        'code' => '068',
        'name' => 'Organizations in other geographic areas',
    ], [
        'code' => '069',
        'name' => 'Museum science',
    ], [
        'code' => '070',
        'name' => 'News media, journalism & publishing',
    ], [
        'code' => '071',
        'name' => 'Newspapers in North America',
    ], [
        'code' => '072',
        'name' => 'Newspapers in British Isles; in England',
    ], [
        'code' => '073',
        'name' => 'Newspapers in central Europe; in Germany',
    ], [
        'code' => '074',
        'name' => 'Newspapers in France & Monaco',
    ], [
        'code' => '075',
        'name' => 'Newspapers in Italy & adjacent islands',
    ], [
        'code' => '076',
        'name' => 'In Iberian Peninsula & adjacent islands',
    ], [
        'code' => '077',
        'name' => 'Newspapers in eastern Europe; in Russia',
    ], [
        'code' => '078',
        'name' => 'Newspapers in Scandinavia',
    ], [
        'code' => '079',
        'name' => 'Newspapers in other geographic areas',
    ], [
        'code' => '080',
        'name' => 'General collections',
    ], [
        'code' => '081',
        'name' => 'Collections in American English',
    ], [
        'code' => '082',
        'name' => 'Collections in English',
    ], [
        'code' => '083',
        'name' => 'Collections in other Germanic languages',
    ], [
        'code' => '084',
        'name' => 'Collections in French, Occitan & Catalan',
    ], [
        'code' => '085',
        'name' => 'In Italian, Romanian & related languages',
    ], [
        'code' => '086',
        'name' => 'Collections in Spanish & Portuguese',
    ], [
        'code' => '087',
        'name' => 'Collections in Slavic languages',
    ], [
        'code' => '088',
        'name' => 'Collections in Scandinavian languages',
    ], [
        'code' => '089',
        'name' => 'Collections in other languages',
    ], [
        'code' => '090',
        'name' => 'Manuscripts & rare books',
    ], [
        'code' => '091',
        'name' => 'Manuscripts',
    ], [
        'code' => '092',
        'name' => 'Block books',
    ], [
        'code' => '093',
        'name' => 'Incunabula',
    ], [
        'code' => '094',
        'name' => 'Printed books',
    ], [
        'code' => '095',
        'name' => 'Books notable for bindings',
    ], [
        'code' => '096',
        'name' => 'Books notable for illustrations',
    ], [
        'code' => '097',
        'name' => 'Books notable for ownership or origin',
    ], [
        'code' => '098',
        'name' => 'Prohibited works, forgeries & hoaxes',
    ], [
        'code' => '099',
        'name' => 'Books notable for format',
    ], [
        'code' => '0',
        'name' => 'Philosophy & psychology',
    ], [
        'code' => '1',
        'name' => 'Theory of philosophy',
    ], [
        'code' => '2',
        'name' => 'Miscellany',
    ], [
        'code' => '3',
        'name' => 'Dictionaries & encyclopedias',
    ], [
        'code' => '4',
        'name' => '[Unassigned]',
    ], [
        'code' => '5',
        'name' => 'Serial publications',
    ], [
        'code' => '6',
        'name' => 'Organizations & management',
    ], [
        'code' => '7',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '8',
        'name' => 'Kinds of persons treatment',
    ], [
        'code' => '9',
        'name' => 'Historical & collected persons treatment',
    ], [
        'code' => '10',
        'name' => 'Metaphysics',
    ], [
        'code' => '11',
        'name' => 'Ontology',
    ], [
        'code' => '12',
        'name' => '[Unassigned]',
    ], [
        'code' => '13',
        'name' => 'Cosmology',
    ], [
        'code' => '14',
        'name' => 'Space',
    ], [
        'code' => '15',
        'name' => 'Time',
    ], [
        'code' => '16',
        'name' => 'Change',
    ], [
        'code' => '17',
        'name' => 'Structure',
    ], [
        'code' => '18',
        'name' => 'Force & energy',
    ], [
        'code' => '19',
        'name' => 'Number & quantity',
    ], [
        'code' => '20',
        'name' => 'Epistemology, causation & humankind',
    ], [
        'code' => '21',
        'name' => 'Epistemology',
    ], [
        'code' => '22',
        'name' => 'Causation',
    ], [
        'code' => '23',
        'name' => 'Determinism & indeterminism',
    ], [
        'code' => '24',
        'name' => 'Teleology',
    ], [
        'code' => '25',
        'name' => '[Unassigned]',
    ], [
        'code' => '26',
        'name' => 'The self',
    ], [
        'code' => '27',
        'name' => 'The unconscious & the subconscious',
    ], [
        'code' => '28',
        'name' => 'Humankind',
    ], [
        'code' => '29',
        'name' => 'Origin & destiny of individual souls',
    ], [
        'code' => '30',
        'name' => 'Parapsychology & occultism',
    ], [
        'code' => '31',
        'name' => 'Parapsychological & occult methods',
    ], [
        'code' => '32',
        'name' => '[Unassigned]',
    ], [
        'code' => '33',
        'name' => 'Specific topics in parapsychology & occultism',
    ], [
        'code' => '34',
        'name' => '[Unassigned]',
    ], [
        'code' => '35',
        'name' => 'Dreams & mysteries',
    ], [
        'code' => '36',
        'name' => '[Unassigned]',
    ], [
        'code' => '37',
        'name' => 'Divinatory graphology',
    ], [
        'code' => '38',
        'name' => 'Physiognomy',
    ], [
        'code' => '39',
        'name' => 'Phrenology',
    ], [
        'code' => '40',
        'name' => 'Specific philosophical schools',
    ], [
        'code' => '41',
        'name' => 'Idealism & related systems',
    ], [
        'code' => '42',
        'name' => 'Critical philosophy',
    ], [
        'code' => '43',
        'name' => 'Bergsonism & intuitionism',
    ], [
        'code' => '44',
        'name' => 'Humanism & related systems',
    ], [
        'code' => '45',
        'name' => 'Sensationalism',
    ], [
        'code' => '46',
        'name' => 'Naturalism & related systems',
    ], [
        'code' => '47',
        'name' => 'Pantheism & related systems',
    ], [
        'code' => '48',
        'name' => 'Eclecticism, liberalism & traditionalism',
    ], [
        'code' => '49',
        'name' => 'Other philosophical systems',
    ], [
        'code' => '50',
        'name' => 'Psychology',
    ], [
        'code' => '51',
        'name' => '[Unassigned]',
    ], [
        'code' => '52',
        'name' => 'Perception, movement, emotions & drives',
    ], [
        'code' => '53',
        'name' => 'Mental processes & intelligence',
    ], [
        'code' => '54',
        'name' => 'Subconscious & altered states',
    ], [
        'code' => '55',
        'name' => 'Differential & developmental psychology',
    ], [
        'code' => '56',
        'name' => 'Comparative psychology',
    ], [
        'code' => '57',
        'name' => '[Unassigned]',
    ], [
        'code' => '58',
        'name' => 'Applied psychology',
    ], [
        'code' => '59',
        'name' => '[Unassigned]',
    ], [
        'code' => '60',
        'name' => 'Logic',
    ], [
        'code' => '61',
        'name' => 'Induction',
    ], [
        'code' => '62',
        'name' => 'Deduction',
    ], [
        'code' => '63',
        'name' => '[Unassigned]',
    ], [
        'code' => '64',
        'name' => '[Unassigned]',
    ], [
        'code' => '65',
        'name' => 'Fallacies & sources of error',
    ], [
        'code' => '66',
        'name' => 'Syllogisms',
    ], [
        'code' => '67',
        'name' => 'Hypotheses',
    ], [
        'code' => '68',
        'name' => 'Argument & persuasion',
    ], [
        'code' => '69',
        'name' => 'Analogy',
    ], [
        'code' => '70',
        'name' => 'Ethics',
    ], [
        'code' => '71',
        'name' => 'Ethical systems',
    ], [
        'code' => '72',
        'name' => 'Political ethics',
    ], [
        'code' => '73',
        'name' => 'Ethics of family relationships',
    ], [
        'code' => '74',
        'name' => 'Occupational ethics',
    ], [
        'code' => '75',
        'name' => 'Ethics of recreation & leisure',
    ], [
        'code' => '76',
        'name' => 'Ethics of sex & reproduction',
    ], [
        'code' => '77',
        'name' => 'Ethics of social relations',
    ], [
        'code' => '78',
        'name' => 'Ethics of consumption',
    ], [
        'code' => '79',
        'name' => 'Other ethical norms',
    ], [
        'code' => '80',
        'name' => 'Ancient, medieval & eastern philosophy',
    ], [
        'code' => '81',
        'name' => 'Eastern philosophy',
    ], [
        'code' => '82',
        'name' => 'Pre-Socratic Greek philosophies',
    ], [
        'code' => '83',
        'name' => 'Socratic & related philosophies',
    ], [
        'code' => '84',
        'name' => 'Platonic philosophy',
    ], [
        'code' => '85',
        'name' => 'Aristotelian philosophy',
    ], [
        'code' => '86',
        'name' => 'Skeptic & Neoplatonic philosophies',
    ], [
        'code' => '87',
        'name' => 'Epicurean philosophy',
    ], [
        'code' => '88',
        'name' => 'Stoic philosophy',
    ], [
        'code' => '89',
        'name' => 'Medieval western philosophy',
    ], [
        'code' => '90',
        'name' => 'Modern western philosophy',
    ], [
        'code' => '91',
        'name' => 'Philosophy of United States & Canada',
    ], [
        'code' => '92',
        'name' => 'Philosophy of British Isles',
    ], [
        'code' => '93',
        'name' => 'Philosophy of Germany & Austria',
    ], [
        'code' => '94',
        'name' => 'Philosophy of France',
    ], [
        'code' => '95',
        'name' => 'Philosophy of Italy',
    ], [
        'code' => '96',
        'name' => 'Philosophy of Spain & Portugal',
    ], [
        'code' => '97',
        'name' => 'Philosophy of former Soviet Union',
    ], [
        'code' => '98',
        'name' => 'Philosophy of Scandinavia',
    ], [
        'code' => '99',
        'name' => 'Philosophy in other geographic areas',
    ], [
        'code' => '100',
        'name' => 'Religion',
    ], [
        'code' => '101',
        'name' => 'Religious mythology & social theology',
    ], [
        'code' => '102',
        'name' => 'Doctrines',
    ], [
        'code' => '103',
        'name' => 'Public worship & other practices',
    ], [
        'code' => '104',
        'name' => 'Religious experience, life & practice',
    ], [
        'code' => '105',
        'name' => 'Religious ethics',
    ], [
        'code' => '106',
        'name' => 'Leaders & organization',
    ], [
        'code' => '107',
        'name' => 'Missions & religious education',
    ], [
        'code' => '108',
        'name' => 'Sources',
    ], [
        'code' => '109',
        'name' => 'Sects & reform movements',
    ], [
        'code' => '110',
        'name' => 'Philosophy & theory of religion',
    ], [
        'code' => '111',
        'name' => 'Concepts of God',
    ], [
        'code' => '112',
        'name' => 'Existence, knowability & attributes of God',
    ], [
        'code' => '113',
        'name' => 'Creation',
    ], [
        'code' => '114',
        'name' => 'Theodicy',
    ], [
        'code' => '115',
        'name' => 'Science & religion',
    ], [
        'code' => '116',
        'name' => '[Unassigned]',
    ], [
        'code' => '117',
        'name' => '[Unassigned]',
    ], [
        'code' => '118',
        'name' => 'Humankind',
    ], [
        'code' => '119',
        'name' => '[Unassigned]',
    ], [
        'code' => '120',
        'name' => 'Bible',
    ], [
        'code' => '121',
        'name' => 'Old Testament (Tanakh)',
    ], [
        'code' => '122',
        'name' => 'Historical books of Old Testament',
    ], [
        'code' => '123',
        'name' => 'Poetic books of Old Testament',
    ], [
        'code' => '124',
        'name' => 'Prophetic books of Old Testament',
    ], [
        'code' => '125',
        'name' => 'New Testament',
    ], [
        'code' => '126',
        'name' => 'Gospels & Acts',
    ], [
        'code' => '127',
        'name' => 'Epistles',
    ], [
        'code' => '128',
        'name' => 'Revelation (Apocalypse)',
    ], [
        'code' => '129',
        'name' => 'Apocrypha & pseudepigrapha',
    ], [
        'code' => '130',
        'name' => 'Christianity & Christian theology',
    ], [
        'code' => '131',
        'name' => 'God',
    ], [
        'code' => '132',
        'name' => 'Jesus Christ & his family',
    ], [
        'code' => '133',
        'name' => 'Humankind',
    ], [
        'code' => '134',
        'name' => 'Salvation & grace',
    ], [
        'code' => '135',
        'name' => 'Spiritual beings',
    ], [
        'code' => '136',
        'name' => 'Eschatology',
    ], [
        'code' => '137',
        'name' => '[Unassigned]',
    ], [
        'code' => '138',
        'name' => 'Creeds & catechisms',
    ], [
        'code' => '139',
        'name' => 'Apologetics & polemics',
    ], [
        'code' => '140',
        'name' => 'Christian moral & devotional theology',
    ], [
        'code' => '141',
        'name' => 'Christian ethics',
    ], [
        'code' => '142',
        'name' => 'Devotional literature',
    ], [
        'code' => '143',
        'name' => 'Evangelistic writings for individuals',
    ], [
        'code' => '144',
        'name' => '[Unassigned]',
    ], [
        'code' => '145',
        'name' => '[Unassigned]',
    ], [
        'code' => '146',
        'name' => 'Use of art in Christianity',
    ], [
        'code' => '147',
        'name' => 'Church furnishings & articles',
    ], [
        'code' => '148',
        'name' => 'Christian experience, practice & life',
    ], [
        'code' => '149',
        'name' => 'Christian observances in family life',
    ], [
        'code' => '150',
        'name' => 'Christian orders & local church',
    ], [
        'code' => '151',
        'name' => 'Preaching',
    ], [
        'code' => '152',
        'name' => 'Texts of sermons',
    ], [
        'code' => '153',
        'name' => 'Pastoral office & work',
    ], [
        'code' => '154',
        'name' => 'Parish administration',
    ], [
        'code' => '155',
        'name' => 'Religious congregations & orders',
    ], [
        'code' => '156',
        'name' => '[Unassigned]',
    ], [
        'code' => '157',
        'name' => '[Unassigned]',
    ], [
        'code' => '158',
        'name' => '[Unassigned]',
    ], [
        'code' => '159',
        'name' => 'Pastoral care of families & kinds of persons',
    ], [
        'code' => '160',
        'name' => 'Social & ecclesiastical theology',
    ], [
        'code' => '161',
        'name' => 'Social theology',
    ], [
        'code' => '162',
        'name' => 'Ecclesiology',
    ], [
        'code' => '163',
        'name' => 'Days, times & places of observance',
    ], [
        'code' => '164',
        'name' => 'Public worship',
    ], [
        'code' => '165',
        'name' => 'Sacraments, other rites & acts',
    ], [
        'code' => '166',
        'name' => 'Missions',
    ], [
        'code' => '167',
        'name' => 'Associations for religious work',
    ], [
        'code' => '168',
        'name' => 'Religious education',
    ], [
        'code' => '169',
        'name' => 'Spiritual renewal',
    ], [
        'code' => '170',
        'name' => 'History of Christianity & Christian church',
    ], [
        'code' => '171',
        'name' => 'Religious orders in church history',
    ], [
        'code' => '172',
        'name' => 'Persecutions in church history',
    ], [
        'code' => '173',
        'name' => 'Doctrinal controversies & heresies',
    ], [
        'code' => '174',
        'name' => 'History of Christianity in Europe',
    ], [
        'code' => '175',
        'name' => 'History of Christianity in Asia',
    ], [
        'code' => '176',
        'name' => 'History of Christianity in Africa',
    ], [
        'code' => '177',
        'name' => 'History of Christianity in North America',
    ], [
        'code' => '178',
        'name' => 'History of Christianity in South America',
    ], [
        'code' => '179',
        'name' => 'History of Christianity in other areas',
    ], [
        'code' => '180',
        'name' => 'Christian denominations & sects',
    ], [
        'code' => '181',
        'name' => 'Early church & Eastern churches',
    ], [
        'code' => '182',
        'name' => 'Roman Catholic Church',
    ], [
        'code' => '183',
        'name' => 'Anglican churches',
    ], [
        'code' => '184',
        'name' => 'Protestants of Continental origin',
    ], [
        'code' => '185',
        'name' => 'Presbyterian, Reformed & Congregational',
    ], [
        'code' => '186',
        'name' => 'Baptist, Disciples of Christ & Adventist',
    ], [
        'code' => '187',
        'name' => 'Methodist & related churches',
    ], [
        'code' => '188',
        'name' => '[Unassigned]',
    ], [
        'code' => '189',
        'name' => 'Other denominations & sects',
    ], [
        'code' => '190',
        'name' => 'Other religions',
    ], [
        'code' => '191',
        'name' => '[Unassigned]',
    ], [
        'code' => '192',
        'name' => 'Greek & Roman religion',
    ], [
        'code' => '193',
        'name' => 'Germanic religion',
    ], [
        'code' => '194',
        'name' => 'Religions of Indic origin',
    ], [
        'code' => '195',
        'name' => 'Zoroastrianism',
    ], [
        'code' => '196',
        'name' => 'Judaism',
    ], [
        'code' => '197',
        'name' => 'Islam, Babism & Bahai Faith',
    ], [
        'code' => '198',
        'name' => '(Optional number)',
    ], [
        'code' => '199',
        'name' => 'Religions not provided for elsewhere',
    ], [
        'code' => '200',
        'name' => 'Social sciences',
    ], [
        'code' => '201',
        'name' => 'Sociology & anthropology',
    ], [
        'code' => '202',
        'name' => 'Social interaction',
    ], [
        'code' => '203',
        'name' => 'Social processes',
    ], [
        'code' => '204',
        'name' => 'Factors affecting social behavior',
    ], [
        'code' => '205',
        'name' => 'Social groups',
    ], [
        'code' => '206',
        'name' => 'Culture & institutions',
    ], [
        'code' => '207',
        'name' => 'Communities',
    ], [
        'code' => '208',
        'name' => '[Unassigned]',
    ], [
        'code' => '209',
        'name' => '[Unassigned]',
    ], [
        'code' => '210',
        'name' => 'Collections of general statistics',
    ], [
        'code' => '211',
        'name' => '[Unassigned]',
    ], [
        'code' => '212',
        'name' => '[Unassigned]',
    ], [
        'code' => '213',
        'name' => '[Unassigned]',
    ], [
        'code' => '214',
        'name' => 'General statistics of Europe',
    ], [
        'code' => '215',
        'name' => 'General statistics of Asia',
    ], [
        'code' => '216',
        'name' => 'General statistics of Africa',
    ], [
        'code' => '217',
        'name' => 'General statistics of North America',
    ], [
        'code' => '218',
        'name' => 'General statistics of South America',
    ], [
        'code' => '219',
        'name' => 'General statistics of other areas',
    ], [
        'code' => '220',
        'name' => 'Political science',
    ], [
        'code' => '221',
        'name' => 'Systems of governments & states',
    ], [
        'code' => '222',
        'name' => 'Relation of state to organized groups',
    ], [
        'code' => '223',
        'name' => 'Civil & political rights',
    ], [
        'code' => '224',
        'name' => 'The political process',
    ], [
        'code' => '225',
        'name' => 'International migration & colonization',
    ], [
        'code' => '226',
        'name' => 'Slavery & emancipation',
    ], [
        'code' => '227',
        'name' => 'International relations',
    ], [
        'code' => '228',
        'name' => 'The legislative process',
    ], [
        'code' => '229',
        'name' => '[Unassigned]',
    ], [
        'code' => '230',
        'name' => 'Economics',
    ], [
        'code' => '231',
        'name' => 'Labor economics',
    ], [
        'code' => '232',
        'name' => 'Financial economics',
    ], [
        'code' => '233',
        'name' => 'Economics of land & energy',
    ], [
        'code' => '234',
        'name' => 'Cooperatives',
    ], [
        'code' => '235',
        'name' => 'Socialism & related systems',
    ], [
        'code' => '236',
        'name' => 'Public finance',
    ], [
        'code' => '237',
        'name' => 'International economics',
    ], [
        'code' => '238',
        'name' => 'Production',
    ], [
        'code' => '239',
        'name' => 'Macroeconomics & related topics',
    ], [
        'code' => '240',
        'name' => 'Law',
    ], [
        'code' => '241',
        'name' => 'Law of nations',
    ], [
        'code' => '242',
        'name' => 'Constitutional & administrative law',
    ], [
        'code' => '243',
        'name' => 'Military, tax, trade & industrial law',
    ], [
        'code' => '244',
        'name' => 'Labor, social, education & cultural law',
    ], [
        'code' => '245',
        'name' => 'Criminal law',
    ], [
        'code' => '246',
        'name' => 'Private law',
    ], [
        'code' => '247',
        'name' => 'Civil procedure & courts',
    ], [
        'code' => '248',
        'name' => 'Laws, regulations & cases',
    ], [
        'code' => '249',
        'name' => 'Law of specific jurisdictions & areas',
    ], [
        'code' => '250',
        'name' => 'Public administration & military science',
    ], [
        'code' => '251',
        'name' => 'Public administration',
    ], [
        'code' => '252',
        'name' => 'General considerations of public administration',
    ], [
        'code' => '253',
        'name' => 'Specific fields of public administration',
    ], [
        'code' => '254',
        'name' => 'Administration of economy & environment',
    ], [
        'code' => '255',
        'name' => 'Military science',
    ], [
        'code' => '256',
        'name' => 'Infantry forces & warfare',
    ], [
        'code' => '257',
        'name' => 'Mounted forces & warfare',
    ], [
        'code' => '258',
        'name' => 'Air & other specialized forces',
    ], [
        'code' => '259',
        'name' => 'Sea forces & warfare',
    ], [
        'code' => '260',
        'name' => 'Social problems & services; associations',
    ], [
        'code' => '261',
        'name' => 'Social problems & social welfare in general',
    ], [
        'code' => '262',
        'name' => 'Social welfare problems & services',
    ], [
        'code' => '263',
        'name' => 'Other social problems & services',
    ], [
        'code' => '264',
        'name' => 'Criminology',
    ], [
        'code' => '265',
        'name' => 'Penal & related institutions',
    ], [
        'code' => '266',
        'name' => 'Associations',
    ], [
        'code' => '267',
        'name' => 'General clubs',
    ], [
        'code' => '268',
        'name' => 'Insurance',
    ], [
        'code' => '269',
        'name' => 'Miscellaneous kinds of associations',
    ], [
        'code' => '270',
        'name' => 'Education',
    ], [
        'code' => '271',
        'name' => 'Schools & their activities; special education',
    ], [
        'code' => '272',
        'name' => 'Elementary education',
    ], [
        'code' => '273',
        'name' => 'Secondary education',
    ], [
        'code' => '274',
        'name' => 'Adult education',
    ], [
        'code' => '275',
        'name' => 'Curricula',
    ], [
        'code' => '276',
        'name' => '[Unassigned]',
    ], [
        'code' => '277',
        'name' => '[Unassigned]',
    ], [
        'code' => '278',
        'name' => 'Higher education',
    ], [
        'code' => '279',
        'name' => 'Public policy issues in education',
    ], [
        'code' => '280',
        'name' => 'Commerce, communications & transportation',
    ], [
        'code' => '281',
        'name' => 'Commerce',
    ], [
        'code' => '282',
        'name' => 'International commerce',
    ], [
        'code' => '283',
        'name' => 'Postal communication',
    ], [
        'code' => '284',
        'name' => 'Communications; telecommunication',
    ], [
        'code' => '285',
        'name' => 'Railroad transportation',
    ], [
        'code' => '286',
        'name' => 'Inland waterway & ferry transportation',
    ], [
        'code' => '287',
        'name' => 'Water, air & space transportation',
    ], [
        'code' => '288',
        'name' => 'Transportation; ground transportation',
    ], [
        'code' => '289',
        'name' => 'Metrology & standardization',
    ], [
        'code' => '290',
        'name' => 'Customs, etiquette & folklore',
    ], [
        'code' => '291',
        'name' => 'Costume & personal appearance',
    ], [
        'code' => '292',
        'name' => 'Customs of life cycle & domestic life',
    ], [
        'code' => '293',
        'name' => 'Death customs',
    ], [
        'code' => '294',
        'name' => 'General customs',
    ], [
        'code' => '295',
        'name' => 'Etiquette (Manners)',
    ], [
        'code' => '296',
        'name' => '[Unassigned]',
    ], [
        'code' => '297',
        'name' => '[Unassigned]',
    ], [
        'code' => '298',
        'name' => 'Folklore',
    ], [
        'code' => '299',
        'name' => 'Customs of war & diplomacy',
    ], [
        'code' => '300',
        'name' => 'Language',
    ], [
        'code' => '301',
        'name' => 'Philosophy & theory',
    ], [
        'code' => '302',
        'name' => 'Miscellany',
    ], [
        'code' => '303',
        'name' => 'Dictionaries & encyclopedias',
    ], [
        'code' => '304',
        'name' => 'Special topics',
    ], [
        'code' => '305',
        'name' => 'Serial publications',
    ], [
        'code' => '306',
        'name' => 'Organizations & management',
    ], [
        'code' => '307',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '308',
        'name' => 'Kinds of persons treatment',
    ], [
        'code' => '309',
        'name' => 'Geographic & persons treatment',
    ], [
        'code' => '310',
        'name' => 'Linguistics',
    ], [
        'code' => '311',
        'name' => 'Writing systems',
    ], [
        'code' => '312',
        'name' => 'Etymology',
    ], [
        'code' => '313',
        'name' => 'Dictionaries',
    ], [
        'code' => '314',
        'name' => 'Phonology & phonetics',
    ], [
        'code' => '315',
        'name' => 'Grammar',
    ], [
        'code' => '316',
        'name' => '[Unassigned]',
    ], [
        'code' => '317',
        'name' => 'Dialectology & historical linguistics',
    ], [
        'code' => '318',
        'name' => 'Standard usage & applied linguistics',
    ], [
        'code' => '319',
        'name' => 'Sign languages',
    ], [
        'code' => '320',
        'name' => 'English & Old English',
    ], [
        'code' => '321',
        'name' => 'English writing system & phonology',
    ], [
        'code' => '322',
        'name' => 'English etymology',
    ], [
        'code' => '323',
        'name' => 'English dictionaries',
    ], [
        'code' => '324',
        'name' => '[Unassigned]',
    ], [
        'code' => '325',
        'name' => 'English grammar',
    ], [
        'code' => '326',
        'name' => '[Unassigned]',
    ], [
        'code' => '327',
        'name' => 'English language variations',
    ], [
        'code' => '328',
        'name' => 'Standard English usage',
    ], [
        'code' => '329',
        'name' => 'Old English (Anglo-Saxon)',
    ], [
        'code' => '330',
        'name' => 'Germanic languages; German',
    ], [
        'code' => '331',
        'name' => 'German writing systems & phonology',
    ], [
        'code' => '332',
        'name' => 'German etymology',
    ], [
        'code' => '333',
        'name' => 'German dictionaries',
    ], [
        'code' => '334',
        'name' => '[Unassigned]',
    ], [
        'code' => '335',
        'name' => 'German grammar',
    ], [
        'code' => '336',
        'name' => '[Unassigned]',
    ], [
        'code' => '337',
        'name' => 'German language variations',
    ], [
        'code' => '338',
        'name' => 'Standard German usage',
    ], [
        'code' => '339',
        'name' => 'Other Germanic languages',
    ], [
        'code' => '340',
        'name' => 'Romance languages; French',
    ], [
        'code' => '341',
        'name' => 'French writing systems & phonology',
    ], [
        'code' => '342',
        'name' => 'French etymology',
    ], [
        'code' => '343',
        'name' => 'French dictionaries',
    ], [
        'code' => '344',
        'name' => '[Unassigned]',
    ], [
        'code' => '345',
        'name' => 'French grammar',
    ], [
        'code' => '346',
        'name' => '[Unassigned]',
    ], [
        'code' => '347',
        'name' => 'French language variations',
    ], [
        'code' => '348',
        'name' => 'Standard French usage',
    ], [
        'code' => '349',
        'name' => 'Occitan & Catalan',
    ], [
        'code' => '350',
        'name' => 'Italian, Romanian & related languages',
    ], [
        'code' => '351',
        'name' => 'Italian writing systems & phonology',
    ], [
        'code' => '352',
        'name' => 'Italian etymology',
    ], [
        'code' => '353',
        'name' => 'Italian dictionaries',
    ], [
        'code' => '354',
        'name' => '[Unassigned]',
    ], [
        'code' => '355',
        'name' => 'Italian grammar',
    ], [
        'code' => '356',
        'name' => '[Unassigned]',
    ], [
        'code' => '357',
        'name' => 'Italian language variations',
    ], [
        'code' => '358',
        'name' => 'Standard Italian usage',
    ], [
        'code' => '359',
        'name' => 'Romanian & related languages',
    ], [
        'code' => '360',
        'name' => 'Spanish & Portuguese languages',
    ], [
        'code' => '361',
        'name' => 'Spanish writing systems & phonology',
    ], [
        'code' => '362',
        'name' => 'Spanish etymology',
    ], [
        'code' => '363',
        'name' => 'Spanish dictionaries',
    ], [
        'code' => '364',
        'name' => '[Unassigned]',
    ], [
        'code' => '365',
        'name' => 'Spanish grammar',
    ], [
        'code' => '366',
        'name' => '[Unassigned]',
    ], [
        'code' => '367',
        'name' => 'Spanish language variations',
    ], [
        'code' => '368',
        'name' => 'Standard Spanish usage',
    ], [
        'code' => '369',
        'name' => 'Portuguese',
    ], [
        'code' => '370',
        'name' => 'Italic languages; Latin',
    ], [
        'code' => '371',
        'name' => 'Classical Latin writing & phonology',
    ], [
        'code' => '372',
        'name' => 'Classical Latin etymology',
    ], [
        'code' => '373',
        'name' => 'Classical Latin dictionaries',
    ], [
        'code' => '374',
        'name' => '[Unassigned]',
    ], [
        'code' => '375',
        'name' => 'Classical Latin grammar',
    ], [
        'code' => '376',
        'name' => '[Unassigned]',
    ], [
        'code' => '377',
        'name' => 'Old, postclassical & Vulgar Latin',
    ], [
        'code' => '378',
        'name' => 'Classical Latin usage',
    ], [
        'code' => '379',
        'name' => 'Other Italic languages',
    ], [
        'code' => '380',
        'name' => 'Hellenic languages; classical Greek',
    ], [
        'code' => '381',
        'name' => 'Classical Greek writing & phonology',
    ], [
        'code' => '382',
        'name' => 'Classical Greek etymology',
    ], [
        'code' => '383',
        'name' => 'Classical Greek dictionaries',
    ], [
        'code' => '384',
        'name' => '[Unassigned]',
    ], [
        'code' => '385',
        'name' => 'Classical Greek grammar',
    ], [
        'code' => '386',
        'name' => '[Unassigned]',
    ], [
        'code' => '387',
        'name' => 'Preclassical & postclassical Greek',
    ], [
        'code' => '388',
        'name' => 'Classical Greek usage',
    ], [
        'code' => '389',
        'name' => 'Other Hellenic languages',
    ], [
        'code' => '390',
        'name' => 'Other languages',
    ], [
        'code' => '391',
        'name' => 'East Indo-European & Celtic languages',
    ], [
        'code' => '392',
        'name' => 'Afro-Asiatic languages; Semitic languages',
    ], [
        'code' => '393',
        'name' => 'Non-Semitic Afro-Asiatic languages',
    ], [
        'code' => '394',
        'name' => 'Altaic, Uralic, Hyperborean & Dravidian',
    ], [
        'code' => '395',
        'name' => 'Languages of East & Southeast Asia',
    ], [
        'code' => '396',
        'name' => 'African languages',
    ], [
        'code' => '397',
        'name' => 'North American native languages',
    ], [
        'code' => '398',
        'name' => 'South American native languages',
    ], [
        'code' => '399',
        'name' => 'Austronesian & other languages',
    ], [
        'code' => '400',
        'name' => 'Natural Sciences and Mathemetics',
    ], [
        'code' => '401',
        'name' => 'Philosophy & theory',
    ], [
        'code' => '402',
        'name' => 'Miscellany',
    ], [
        'code' => '403',
        'name' => 'Dictionaries & encyclopedias',
    ], [
        'code' => '404',
        'name' => '[Unassigned]',
    ], [
        'code' => '405',
        'name' => 'Serial publications',
    ], [
        'code' => '406',
        'name' => 'Organizations & management',
    ], [
        'code' => '407',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '408',
        'name' => 'Natural history',
    ], [
        'code' => '409',
        'name' => 'Historical, geographic & persons treatment',
    ], [
        'code' => '410',
        'name' => 'Mathematics',
    ], [
        'code' => '411',
        'name' => 'General principles of mathematics',
    ], [
        'code' => '412',
        'name' => 'Algebra',
    ], [
        'code' => '413',
        'name' => 'Arithmetic',
    ], [
        'code' => '414',
        'name' => 'Topology',
    ], [
        'code' => '415',
        'name' => 'Analysis',
    ], [
        'code' => '416',
        'name' => 'Geometry',
    ], [
        'code' => '417',
        'name' => '[Unassigned]',
    ], [
        'code' => '418',
        'name' => 'Numerical analysis',
    ], [
        'code' => '419',
        'name' => 'Probabilities & applied mathematics',
    ], [
        'code' => '420',
        'name' => 'Astronomy & allied sciences',
    ], [
        'code' => '421',
        'name' => 'Celestial mechanics',
    ], [
        'code' => '422',
        'name' => 'Techniques, equipment & materials',
    ], [
        'code' => '423',
        'name' => 'Specific celestial bodies & phenomena',
    ], [
        'code' => '424',
        'name' => '[Unassigned]',
    ], [
        'code' => '425',
        'name' => 'Earth (Astronomical geography)',
    ], [
        'code' => '426',
        'name' => 'Mathematical geography',
    ], [
        'code' => '427',
        'name' => 'Celestial navigation',
    ], [
        'code' => '428',
        'name' => 'Ephemerides',
    ], [
        'code' => '429',
        'name' => 'Chronology',
    ], [
        'code' => '430',
        'name' => 'Physics',
    ], [
        'code' => '431',
        'name' => 'Classical mechanics; solid mechanics',
    ], [
        'code' => '432',
        'name' => 'Fluid mechanics; liquid mechanics',
    ], [
        'code' => '433',
        'name' => 'Gas mechanics',
    ], [
        'code' => '434',
        'name' => 'Sound & related vibrations',
    ], [
        'code' => '435',
        'name' => 'Light & infrared & ultraviolet phenomena',
    ], [
        'code' => '436',
        'name' => 'Heat',
    ], [
        'code' => '437',
        'name' => 'Electricity & electronics',
    ], [
        'code' => '438',
        'name' => 'Magnetism',
    ], [
        'code' => '439',
        'name' => 'Modern physics',
    ], [
        'code' => '440',
        'name' => 'Chemistry & allied sciences',
    ], [
        'code' => '441',
        'name' => 'Physical chemistry',
    ], [
        'code' => '442',
        'name' => 'Techniques, equipment & materials',
    ], [
        'code' => '443',
        'name' => 'Analytical chemistry',
    ], [
        'code' => '444',
        'name' => '[Unassigned]',
    ], [
        'code' => '445',
        'name' => '[Unassigned]',
    ], [
        'code' => '446',
        'name' => 'Inorganic chemistry',
    ], [
        'code' => '447',
        'name' => 'Organic chemistry',
    ], [
        'code' => '448',
        'name' => 'Crystallography',
    ], [
        'code' => '449',
        'name' => 'Mineralogy',
    ], [
        'code' => '450',
        'name' => 'Earth sciences',
    ], [
        'code' => '451',
        'name' => 'Geology, hydrology & meteorology',
    ], [
        'code' => '452',
        'name' => 'Petrology',
    ], [
        'code' => '453',
        'name' => 'Economic geology',
    ], [
        'code' => '454',
        'name' => 'Earth sciences of Europe',
    ], [
        'code' => '455',
        'name' => 'Earth sciences of Asia',
    ], [
        'code' => '456',
        'name' => 'Earth sciences of Africa',
    ], [
        'code' => '457',
        'name' => 'Earth sciences of North America',
    ], [
        'code' => '458',
        'name' => 'Earth sciences of South America',
    ], [
        'code' => '459',
        'name' => 'Earth sciences of other areas',
    ], [
        'code' => '460',
        'name' => 'Paleontology; paleozoology',
    ], [
        'code' => '461',
        'name' => 'Paleobotany; fossil microorganisms',
    ], [
        'code' => '462',
        'name' => 'Fossil invertebrates',
    ], [
        'code' => '463',
        'name' => 'Fossil marine & seashore invertebrates',
    ], [
        'code' => '464',
        'name' => 'Fossil mollusks & molluscoids',
    ], [
        'code' => '465',
        'name' => 'Fossil arthropods',
    ], [
        'code' => '466',
        'name' => 'Fossil chordates',
    ], [
        'code' => '467',
        'name' => 'Fossil cold-blooded vertebrates; fossil fishes',
    ], [
        'code' => '468',
        'name' => 'Fossil birds',
    ], [
        'code' => '469',
        'name' => 'Fossil mammals',
    ], [
        'code' => '470',
        'name' => 'Life sciences; biology',
    ], [
        'code' => '471',
        'name' => 'Physiology & related subjects',
    ], [
        'code' => '472',
        'name' => 'Biochemistry',
    ], [
        'code' => '473',
        'name' => 'Specific physiological systems in animals',
    ], [
        'code' => '474',
        'name' => '[Unassigned]',
    ], [
        'code' => '475',
        'name' => 'Specific parts of & systems in plants',
    ], [
        'code' => '476',
        'name' => 'Genetics & evolution',
    ], [
        'code' => '477',
        'name' => 'Ecology',
    ], [
        'code' => '478',
        'name' => 'Natural history of organisms',
    ], [
        'code' => '479',
        'name' => 'Microorganisms, fungi & algae',
    ], [
        'code' => '480',
        'name' => 'Plants (Botany)',
    ], [
        'code' => '481',
        'name' => 'Specific topics in natural history',
    ], [
        'code' => '482',
        'name' => 'Plants noted for characteristics & flowers',
    ], [
        'code' => '483',
        'name' => 'Dicotyledons',
    ], [
        'code' => '484',
        'name' => 'Monocotyledons',
    ], [
        'code' => '485',
        'name' => 'Gymnosperms; conifers',
    ], [
        'code' => '486',
        'name' => 'Seedless plants',
    ], [
        'code' => '487',
        'name' => 'Vascular seedless plants',
    ], [
        'code' => '488',
        'name' => 'Bryophytes',
    ], [
        'code' => '489',
        'name' => '[Unassigned]',
    ], [
        'code' => '490',
        'name' => 'Animals (Zoology)',
    ], [
        'code' => '491',
        'name' => 'Specific topics in natural history',
    ], [
        'code' => '492',
        'name' => 'Invertebrates',
    ], [
        'code' => '493',
        'name' => 'Marine & seashore invertebrates',
    ], [
        'code' => '494',
        'name' => 'Mollusks & molluscoids',
    ], [
        'code' => '495',
        'name' => 'Arthropods',
    ], [
        'code' => '496',
        'name' => 'Chordates',
    ], [
        'code' => '497',
        'name' => 'Cold-blooded vertebrates; fishes',
    ], [
        'code' => '498',
        'name' => 'Birds',
    ], [
        'code' => '499',
        'name' => 'Mammals',
    ], [
        'code' => '500',
        'name' => 'Technology',
    ], [
        'code' => '501',
        'name' => 'Philosophy & theory',
    ], [
        'code' => '502',
        'name' => 'Miscellany',
    ], [
        'code' => '503',
        'name' => 'Dictionaries & encyclopedias',
    ], [
        'code' => '504',
        'name' => 'Special topics',
    ], [
        'code' => '505',
        'name' => 'Serial publications',
    ], [
        'code' => '506',
        'name' => 'Organizations',
    ], [
        'code' => '507',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '508',
        'name' => 'Inventions & patents',
    ], [
        'code' => '509',
        'name' => 'Historical, geographic & persons treatment',
    ], [
        'code' => '510',
        'name' => 'Medicine & health',
    ], [
        'code' => '511',
        'name' => 'Human anatomy, cytology & histology',
    ], [
        'code' => '512',
        'name' => 'Human physiology',
    ], [
        'code' => '513',
        'name' => 'Personal health & safety',
    ], [
        'code' => '514',
        'name' => 'Incidence & prevention of disease',
    ], [
        'code' => '515',
        'name' => 'Pharmacology & therapeutics',
    ], [
        'code' => '516',
        'name' => 'Diseases',
    ], [
        'code' => '517',
        'name' => 'Surgery & related medical specialties',
    ], [
        'code' => '518',
        'name' => 'Gynecology, obstetrics, pediatrics & geriatrics',
    ], [
        'code' => '519',
        'name' => '[Unassigned]',
    ], [
        'code' => '520',
        'name' => 'Engineering & allied operations',
    ], [
        'code' => '521',
        'name' => 'Applied physics',
    ], [
        'code' => '522',
        'name' => 'Mining & related operations',
    ], [
        'code' => '523',
        'name' => 'Military & nautical engineering',
    ], [
        'code' => '524',
        'name' => 'Civil engineering',
    ], [
        'code' => '525',
        'name' => 'Engineering of railroads & roads',
    ], [
        'code' => '526',
        'name' => '[Unassigned]',
    ], [
        'code' => '527',
        'name' => 'Hydraulic engineering',
    ], [
        'code' => '528',
        'name' => 'Sanitary & municipal engineering',
    ], [
        'code' => '529',
        'name' => 'Other branches of engineering',
    ], [
        'code' => '530',
        'name' => 'Agriculture & related technologies',
    ], [
        'code' => '531',
        'name' => 'Techniques, equipment & materials',
    ], [
        'code' => '532',
        'name' => 'Plant injuries, diseases & pests',
    ], [
        'code' => '533',
        'name' => 'Field & plantation crops',
    ], [
        'code' => '534',
        'name' => 'Orchards, fruits & forestry',
    ], [
        'code' => '535',
        'name' => 'Garden crops (Horticulture)',
    ], [
        'code' => '536',
        'name' => 'Animal husbandry',
    ], [
        'code' => '537',
        'name' => 'Processing dairy & related products',
    ], [
        'code' => '538',
        'name' => 'Insect culture',
    ], [
        'code' => '539',
        'name' => 'Hunting, fishing & conservation',
    ], [
        'code' => '540',
        'name' => 'Home & family management',
    ], [
        'code' => '541',
        'name' => 'Food & drink',
    ], [
        'code' => '542',
        'name' => 'Meals & table service',
    ], [
        'code' => '543',
        'name' => 'Housing & household equipment',
    ], [
        'code' => '544',
        'name' => 'Household utilities',
    ], [
        'code' => '545',
        'name' => 'Household furnishings',
    ], [
        'code' => '546',
        'name' => 'Sewing, clothing & personal living',
    ], [
        'code' => '547',
        'name' => 'Management of public households',
    ], [
        'code' => '548',
        'name' => 'Housekeeping',
    ], [
        'code' => '549',
        'name' => 'Child rearing & home care of persons',
    ], [
        'code' => '550',
        'name' => 'Management & auxiliary services',
    ], [
        'code' => '551',
        'name' => 'Office services',
    ], [
        'code' => '552',
        'name' => 'Processes of written communication',
    ], [
        'code' => '553',
        'name' => 'Shorthand',
    ], [
        'code' => '554',
        'name' => '[Unassigned]',
    ], [
        'code' => '555',
        'name' => '[Unassigned]',
    ], [
        'code' => '556',
        'name' => '[Unassigned]',
    ], [
        'code' => '557',
        'name' => 'Accounting',
    ], [
        'code' => '558',
        'name' => 'General management',
    ], [
        'code' => '559',
        'name' => 'Advertising & public relations',
    ], [
        'code' => '560',
        'name' => 'Chemical engineering',
    ], [
        'code' => '561',
        'name' => 'Industrial chemicals',
    ], [
        'code' => '562',
        'name' => 'Explosives, fuels & related products',
    ], [
        'code' => '563',
        'name' => 'Beverage technology',
    ], [
        'code' => '564',
        'name' => 'Food technology',
    ], [
        'code' => '565',
        'name' => 'Industrial oils, fats, waxes & gases',
    ], [
        'code' => '566',
        'name' => 'Ceramic & allied technologies',
    ], [
        'code' => '567',
        'name' => 'Cleaning, color & coating technologies',
    ], [
        'code' => '568',
        'name' => 'Technology of other organic products',
    ], [
        'code' => '569',
        'name' => 'Metallurgy',
    ], [
        'code' => '570',
        'name' => 'Manufacturing',
    ], [
        'code' => '571',
        'name' => 'Metalworking & primary metal products',
    ], [
        'code' => '572',
        'name' => 'Iron, steel & other iron alloys',
    ], [
        'code' => '573',
        'name' => 'Nonferrous metals',
    ], [
        'code' => '574',
        'name' => 'Lumber processing, wood products & cork',
    ], [
        'code' => '575',
        'name' => 'Leather & fur processing',
    ], [
        'code' => '576',
        'name' => 'Pulp & paper technology',
    ], [
        'code' => '577',
        'name' => 'Textiles',
    ], [
        'code' => '578',
        'name' => 'Elastomers & elastomer products',
    ], [
        'code' => '579',
        'name' => 'Other products of specific materials',
    ], [
        'code' => '580',
        'name' => 'Manufacture for specific uses',
    ], [
        'code' => '581',
        'name' => 'Precision instruments & other devices',
    ], [
        'code' => '582',
        'name' => 'Small forge work (Blacksmithing)',
    ], [
        'code' => '583',
        'name' => 'Hardware & household appliances',
    ], [
        'code' => '584',
        'name' => 'Furnishings & home workshops',
    ], [
        'code' => '585',
        'name' => 'Leather, fur goods & related products',
    ], [
        'code' => '586',
        'name' => 'Printing & related activities',
    ], [
        'code' => '587',
        'name' => 'Clothing & accessories',
    ], [
        'code' => '588',
        'name' => 'Other final products & packaging',
    ], [
        'code' => '589',
        'name' => '[Unassigned]',
    ], [
        'code' => '590',
        'name' => 'Buildings',
    ], [
        'code' => '591',
        'name' => 'Building materials',
    ], [
        'code' => '592',
        'name' => 'Auxiliary construction practices',
    ], [
        'code' => '593',
        'name' => 'Specific materials & purposes',
    ], [
        'code' => '594',
        'name' => 'Wood construction & carpentry',
    ], [
        'code' => '595',
        'name' => 'Roof covering',
    ], [
        'code' => '596',
        'name' => 'Utilities',
    ], [
        'code' => '597',
        'name' => 'Heating, ventilating & air-conditioning',
    ], [
        'code' => '598',
        'name' => 'Detail finishing',
    ], [
        'code' => '599',
        'name' => '[Unassigned]',
    ], [
        'code' => '600',
        'name' => 'The arts; fine & decorative arts',
    ], [
        'code' => '601',
        'name' => 'Philosophy of fine & decorative arts',
    ], [
        'code' => '602',
        'name' => 'Miscellany of fine & decorative arts',
    ], [
        'code' => '603',
        'name' => 'Dictionaries of fine & decorative arts',
    ], [
        'code' => '604',
        'name' => 'Special topics in fine & decorative arts',
    ], [
        'code' => '605',
        'name' => 'Serial publications of fine & decorative arts',
    ], [
        'code' => '606',
        'name' => 'Organizations & management',
    ], [
        'code' => '607',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '608',
        'name' => 'Galleries, museums & private collections',
    ], [
        'code' => '609',
        'name' => 'Historical, geographic & persons treatment',
    ], [
        'code' => '610',
        'name' => 'Civic & landscape art',
    ], [
        'code' => '611',
        'name' => 'Area planning',
    ], [
        'code' => '612',
        'name' => 'Landscape architecture',
    ], [
        'code' => '613',
        'name' => 'Landscape architecture of trafficways',
    ], [
        'code' => '614',
        'name' => 'Water features',
    ], [
        'code' => '615',
        'name' => 'Woody plants',
    ], [
        'code' => '616',
        'name' => 'Herbaceous plants',
    ], [
        'code' => '617',
        'name' => 'Structures in landscape architecture',
    ], [
        'code' => '618',
        'name' => 'Landscape design of cemeteries',
    ], [
        'code' => '619',
        'name' => 'Natural landscapes',
    ], [
        'code' => '620',
        'name' => 'Architecture',
    ], [
        'code' => '621',
        'name' => 'Architectural structure',
    ], [
        'code' => '622',
        'name' => 'Architecture to ca. 300',
    ], [
        'code' => '623',
        'name' => 'Architecture from ca. 300 to 1399',
    ], [
        'code' => '624',
        'name' => 'Architecture from 1400',
    ], [
        'code' => '625',
        'name' => 'Public structures',
    ], [
        'code' => '626',
        'name' => 'Buildings for religious purposes',
    ], [
        'code' => '627',
        'name' => 'Buildings for education & research',
    ], [
        'code' => '628',
        'name' => 'Residential & related buildings',
    ], [
        'code' => '629',
        'name' => 'Design & decoration',
    ], [
        'code' => '630',
        'name' => 'Plastic arts; sculpture',
    ], [
        'code' => '631',
        'name' => 'Processes, forms & subjects of sculpture',
    ], [
        'code' => '632',
        'name' => 'Sculpture to ca. 500',
    ], [
        'code' => '633',
        'name' => 'Greek, Etruscan & Roman sculpture',
    ], [
        'code' => '634',
        'name' => 'Sculpture from ca. 500 to 1399',
    ], [
        'code' => '635',
        'name' => 'Sculpture from 1400',
    ], [
        'code' => '636',
        'name' => 'Carving & carvings',
    ], [
        'code' => '637',
        'name' => 'Numismatics & sigillography',
    ], [
        'code' => '638',
        'name' => 'Ceramic arts',
    ], [
        'code' => '639',
        'name' => 'Art metalwork',
    ], [
        'code' => '640',
        'name' => 'Drawing & decorative arts',
    ], [
        'code' => '641',
        'name' => 'Drawing & drawings',
    ], [
        'code' => '642',
        'name' => 'Perspective',
    ], [
        'code' => '643',
        'name' => 'Drawing & drawings by subject',
    ], [
        'code' => '644',
        'name' => '[Unassigned]',
    ], [
        'code' => '645',
        'name' => 'Decorative arts',
    ], [
        'code' => '646',
        'name' => 'Textile arts',
    ], [
        'code' => '647',
        'name' => 'Interior decoration',
    ], [
        'code' => '648',
        'name' => 'Glass',
    ], [
        'code' => '649',
        'name' => 'Furniture & accessories',
    ], [
        'code' => '650',
        'name' => 'Painting & paintings',
    ], [
        'code' => '651',
        'name' => 'Techniques, equipment, materials & forms',
    ], [
        'code' => '652',
        'name' => 'Color',
    ], [
        'code' => '653',
        'name' => 'Symbolism, allegory, mythology & legend',
    ], [
        'code' => '654',
        'name' => 'Genre paintings',
    ], [
        'code' => '655',
        'name' => 'Religion',
    ], [
        'code' => '656',
        'name' => '[Unassigned]',
    ], [
        'code' => '657',
        'name' => 'Human figures',
    ], [
        'code' => '658',
        'name' => 'Other subjects',
    ], [
        'code' => '659',
        'name' => 'Historical, geographic & persons treatment',
    ], [
        'code' => '660',
        'name' => 'Graphic arts; printmaking & prints',
    ], [
        'code' => '661',
        'name' => 'Relief processes (Block printing)',
    ], [
        'code' => '662',
        'name' => '[Unassigned]',
    ], [
        'code' => '663',
        'name' => 'Lithographic processes',
    ], [
        'code' => '664',
        'name' => 'Chromolithography & serigraphy',
    ], [
        'code' => '665',
        'name' => 'Metal engraving',
    ], [
        'code' => '666',
        'name' => 'Mezzotinting, aquatinting & related processes',
    ], [
        'code' => '667',
        'name' => 'Etching & drypoint',
    ], [
        'code' => '668',
        'name' => '[Unassigned]',
    ], [
        'code' => '669',
        'name' => 'Prints',
    ], [
        'code' => '670',
        'name' => 'Photography, photographs & computer art',
    ], [
        'code' => '671',
        'name' => 'Techniques, equipment & materials',
    ], [
        'code' => '672',
        'name' => 'Metallic salt processes',
    ], [
        'code' => '673',
        'name' => 'Pigment processes of printing',
    ], [
        'code' => '674',
        'name' => 'Holography',
    ], [
        'code' => '675',
        'name' => 'Digital photography',
    ], [
        'code' => '676',
        'name' => 'Computer art (Digital art)',
    ], [
        'code' => '677',
        'name' => '[Unassigned]',
    ], [
        'code' => '678',
        'name' => 'Fields & kinds of photography',
    ], [
        'code' => '679',
        'name' => 'Photographs',
    ], [
        'code' => '680',
        'name' => 'Music',
    ], [
        'code' => '681',
        'name' => 'General principles & musical forms',
    ], [
        'code' => '682',
        'name' => 'Vocal music',
    ], [
        'code' => '683',
        'name' => 'Music for single voices; the voice',
    ], [
        'code' => '684',
        'name' => 'Instruments & instrumental ensembles',
    ], [
        'code' => '685',
        'name' => 'Ensembles with one instrument per part',
    ], [
        'code' => '686',
        'name' => 'Keyboard & other instruments',
    ], [
        'code' => '687',
        'name' => 'Stringed instruments',
    ], [
        'code' => '688',
        'name' => 'Wind instruments',
    ], [
        'code' => '689',
        'name' => '(Optional number)',
    ], [
        'code' => '690',
        'name' => 'Recreational & performing arts',
    ], [
        'code' => '691',
        'name' => 'Public performances',
    ], [
        'code' => '692',
        'name' => 'Stage presentations',
    ], [
        'code' => '693',
        'name' => 'Indoor games & amusements',
    ], [
        'code' => '694',
        'name' => 'Indoor games of skill',
    ], [
        'code' => '695',
        'name' => 'Games of chance',
    ], [
        'code' => '696',
        'name' => 'Athletic & outdoor sports & games',
    ], [
        'code' => '697',
        'name' => 'Aquatic & air sports',
    ], [
        'code' => '698',
        'name' => 'Equestrian sports & animal racing',
    ], [
        'code' => '699',
        'name' => 'Fishing, hunting & shooting',
    ], [
        'code' => '700',
        'name' => 'Literature & rhetoric',
    ], [
        'code' => '701',
        'name' => 'Philosophy & theory',
    ], [
        'code' => '702',
        'name' => 'Miscellany',
    ], [
        'code' => '703',
        'name' => 'Dictionaries & encyclopedias',
    ], [
        'code' => '704',
        'name' => '[Unassigned]',
    ], [
        'code' => '705',
        'name' => 'Serial publications',
    ], [
        'code' => '706',
        'name' => 'Organizations & management',
    ], [
        'code' => '707',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '708',
        'name' => 'Rhetoric & collections of literature',
    ], [
        'code' => '709',
        'name' => 'History, description & criticism',
    ], [
        'code' => '710',
        'name' => 'American literature in English',
    ], [
        'code' => '711',
        'name' => 'American poetry in English',
    ], [
        'code' => '712',
        'name' => 'American drama in English',
    ], [
        'code' => '713',
        'name' => 'American fiction in English',
    ], [
        'code' => '714',
        'name' => 'American essays in English',
    ], [
        'code' => '715',
        'name' => 'American speeches in English',
    ], [
        'code' => '716',
        'name' => 'American letters in English',
    ], [
        'code' => '717',
        'name' => 'American humor & satire in English',
    ], [
        'code' => '718',
        'name' => 'American miscellaneous writings',
    ], [
        'code' => '719',
        'name' => '(Optional number)',
    ], [
        'code' => '720',
        'name' => 'English & Old English literatures',
    ], [
        'code' => '721',
        'name' => 'English poetry',
    ], [
        'code' => '722',
        'name' => 'English drama',
    ], [
        'code' => '723',
        'name' => 'English fiction',
    ], [
        'code' => '724',
        'name' => 'English essays',
    ], [
        'code' => '725',
        'name' => 'English speeches',
    ], [
        'code' => '726',
        'name' => 'English letters',
    ], [
        'code' => '727',
        'name' => 'English humor & satire',
    ], [
        'code' => '728',
        'name' => 'English miscellaneous writings',
    ], [
        'code' => '729',
        'name' => 'Old English (Anglo-Saxon)',
    ], [
        'code' => '730',
        'name' => 'Literatures of Germanic languages',
    ], [
        'code' => '731',
        'name' => 'German poetry',
    ], [
        'code' => '732',
        'name' => 'German drama',
    ], [
        'code' => '733',
        'name' => 'German fiction',
    ], [
        'code' => '734',
        'name' => 'German essays',
    ], [
        'code' => '735',
        'name' => 'German speeches',
    ], [
        'code' => '736',
        'name' => 'German letters',
    ], [
        'code' => '737',
        'name' => 'German humor & satire',
    ], [
        'code' => '738',
        'name' => 'German miscellaneous writings',
    ], [
        'code' => '739',
        'name' => 'Other Germanic literatures',
    ], [
        'code' => '740',
        'name' => 'Literatures of Romance languages',
    ], [
        'code' => '741',
        'name' => 'French poetry',
    ], [
        'code' => '742',
        'name' => 'French drama',
    ], [
        'code' => '743',
        'name' => 'French fiction',
    ], [
        'code' => '744',
        'name' => 'French essays',
    ], [
        'code' => '745',
        'name' => 'French speeches',
    ], [
        'code' => '746',
        'name' => 'French letters',
    ], [
        'code' => '747',
        'name' => 'French humor & satire',
    ], [
        'code' => '748',
        'name' => 'French miscellaneous writings',
    ], [
        'code' => '749',
        'name' => 'Occitan & Catalan literatures',
    ], [
        'code' => '750',
        'name' => 'Italian, Romanian & related literatures',
    ], [
        'code' => '751',
        'name' => 'Italian poetry',
    ], [
        'code' => '752',
        'name' => 'Italian drama',
    ], [
        'code' => '753',
        'name' => 'Italian fiction',
    ], [
        'code' => '754',
        'name' => 'Italian essays',
    ], [
        'code' => '755',
        'name' => 'Italian speeches',
    ], [
        'code' => '756',
        'name' => 'Italian letters',
    ], [
        'code' => '757',
        'name' => 'Italian humor & satire',
    ], [
        'code' => '758',
        'name' => 'Italian miscellaneous writings',
    ], [
        'code' => '759',
        'name' => 'Romanian & related literatures',
    ], [
        'code' => '760',
        'name' => 'Spanish & Portuguese literatures',
    ], [
        'code' => '761',
        'name' => 'Spanish poetry',
    ], [
        'code' => '762',
        'name' => 'Spanish drama',
    ], [
        'code' => '763',
        'name' => 'Spanish fiction',
    ], [
        'code' => '764',
        'name' => 'Spanish essays',
    ], [
        'code' => '765',
        'name' => 'Spanish speeches',
    ], [
        'code' => '766',
        'name' => 'Spanish letters',
    ], [
        'code' => '767',
        'name' => 'Spanish humor & satire',
    ], [
        'code' => '768',
        'name' => 'Spanish miscellaneous writings',
    ], [
        'code' => '769',
        'name' => 'Portuguese literature',
    ], [
        'code' => '770',
        'name' => 'Italic literatures; Latin literature',
    ], [
        'code' => '771',
        'name' => 'Latin poetry',
    ], [
        'code' => '772',
        'name' => 'Latin dramatic poetry & drama',
    ], [
        'code' => '773',
        'name' => 'Latin epic poetry & fiction',
    ], [
        'code' => '774',
        'name' => 'Latin lyric poetry',
    ], [
        'code' => '775',
        'name' => 'Latin speeches',
    ], [
        'code' => '776',
        'name' => 'Latin letters',
    ], [
        'code' => '777',
        'name' => 'Latin humor & satire',
    ], [
        'code' => '778',
        'name' => 'Latin miscellaneous writings',
    ], [
        'code' => '779',
        'name' => 'Literatures of other Italic languages',
    ], [
        'code' => '780',
        'name' => 'Hellenic literatures; classical Greek',
    ], [
        'code' => '781',
        'name' => 'Classical Greek poetry',
    ], [
        'code' => '782',
        'name' => 'Classical Greek dramatic poetry & drama',
    ], [
        'code' => '783',
        'name' => 'Classical Greek epic poetry & fiction',
    ], [
        'code' => '784',
        'name' => 'Classical Greek lyric poetry',
    ], [
        'code' => '785',
        'name' => 'Classical Greek speeches',
    ], [
        'code' => '786',
        'name' => 'Classical Greek letters',
    ], [
        'code' => '787',
        'name' => 'Classical Greek humor & satire',
    ], [
        'code' => '788',
        'name' => 'Classical Greek miscellaneous writings',
    ], [
        'code' => '789',
        'name' => 'Modern Greek literature',
    ], [
        'code' => '790',
        'name' => 'Literatures of other languages',
    ], [
        'code' => '791',
        'name' => 'East Indo-European & Celtic literatures',
    ], [
        'code' => '792',
        'name' => 'Afro-Asiatic literatures; Semitic literatures',
    ], [
        'code' => '793',
        'name' => 'Non-Semitic Afro-Asiatic literatures',
    ], [
        'code' => '794',
        'name' => 'Altaic, Uralic, Hyperborean & Dravidian',
    ], [
        'code' => '795',
        'name' => 'Literatures of East & Southeast Asia',
    ], [
        'code' => '796',
        'name' => 'African literatures',
    ], [
        'code' => '797',
        'name' => 'North American native literatures',
    ], [
        'code' => '798',
        'name' => 'South American native literatures',
    ], [
        'code' => '799',
        'name' => 'Austronesian & other literatures',
    ], [
        'code' => '800',
        'name' => 'History & geography',
    ], [
        'code' => '801',
        'name' => 'Philosophy & theory',
    ], [
        'code' => '802',
        'name' => 'Miscellany',
    ], [
        'code' => '803',
        'name' => 'Dictionaries & encyclopedias',
    ], [
        'code' => '804',
        'name' => 'Collected accounts of events',
    ], [
        'code' => '805',
        'name' => 'Serial publications',
    ], [
        'code' => '806',
        'name' => 'Organizations & management',
    ], [
        'code' => '807',
        'name' => 'Education, research & related topics',
    ], [
        'code' => '808',
        'name' => 'Kinds of persons treatment',
    ], [
        'code' => '809',
        'name' => 'World history',
    ], [
        'code' => '810',
        'name' => 'Geography & travel',
    ], [
        'code' => '811',
        'name' => 'Historical geography',
    ], [
        'code' => '812',
        'name' => 'Atlases, maps, charts & plans',
    ], [
        'code' => '813',
        'name' => 'Geography of & travel in ancient world',
    ], [
        'code' => '814',
        'name' => 'Geography of & travel in Europe',
    ], [
        'code' => '815',
        'name' => 'Geography of & travel in Asia',
    ], [
        'code' => '816',
        'name' => 'Geography of & travel in Africa',
    ], [
        'code' => '817',
        'name' => 'Geography of & travel in North America',
    ], [
        'code' => '818',
        'name' => 'Geography of & travel in South America',
    ], [
        'code' => '819',
        'name' => 'Geography of & travel in other areas',
    ], [
        'code' => '820',
        'name' => 'Biography, genealogy & insignia',
    ], [
        'code' => '821',
        'name' => '(Optional number)',
    ], [
        'code' => '822',
        'name' => '(Optional number)',
    ], [
        'code' => '823',
        'name' => '(Optional number)',
    ], [
        'code' => '824',
        'name' => '(Optional number)',
    ], [
        'code' => '825',
        'name' => '(Optional number)',
    ], [
        'code' => '826',
        'name' => '(Optional number)',
    ], [
        'code' => '827',
        'name' => '(Optional number)',
    ], [
        'code' => '828',
        'name' => '(Optional number)',
    ], [
        'code' => '829',
        'name' => 'Genealogy, names & insignia',
    ], [
        'code' => '830',
        'name' => 'History of ancient world to ca. 499',
    ], [
        'code' => '831',
        'name' => 'China to 420',
    ], [
        'code' => '832',
        'name' => 'Egypt to 640',
    ], [
        'code' => '833',
        'name' => 'Palestine to 70',
    ], [
        'code' => '834',
        'name' => 'India to 647',
    ], [
        'code' => '835',
        'name' => 'Mesopotamia & Iranian Plateau to 637',
    ], [
        'code' => '836',
        'name' => 'Europe north & west of Italy to ca. 499',
    ], [
        'code' => '837',
        'name' => 'Italy & adjacent territories to 476',
    ], [
        'code' => '838',
        'name' => 'Greece to 323',
    ], [
        'code' => '839',
        'name' => 'Other parts of ancient world to ca. 640',
    ], [
        'code' => '840',
        'name' => 'History of Europe',
    ], [
        'code' => '841',
        'name' => 'British Isles',
    ], [
        'code' => '842',
        'name' => 'England & Wales',
    ], [
        'code' => '843',
        'name' => 'Central Europe; Germany',
    ], [
        'code' => '844',
        'name' => 'France & Monaco',
    ], [
        'code' => '845',
        'name' => 'Italian Peninsula & adjacent islands',
    ], [
        'code' => '846',
        'name' => 'Iberian Peninsula & adjacent islands',
    ], [
        'code' => '847',
        'name' => 'Eastern Europe; Russia',
    ], [
        'code' => '848',
        'name' => 'Scandinavia',
    ], [
        'code' => '849',
        'name' => 'Other parts of Europe',
    ], [
        'code' => '850',
        'name' => 'History of Asia; Far East',
    ], [
        'code' => '851',
        'name' => 'China & adjacent areas',
    ], [
        'code' => '852',
        'name' => 'Japan',
    ], [
        'code' => '853',
        'name' => 'Arabian Peninsula & adjacent areas',
    ], [
        'code' => '854',
        'name' => 'South Asia; India',
    ], [
        'code' => '855',
        'name' => 'Iran',
    ], [
        'code' => '856',
        'name' => 'Middle East (Near East)',
    ], [
        'code' => '857',
        'name' => 'Siberia (Asiatic Russia)',
    ], [
        'code' => '858',
        'name' => 'Central Asia',
    ], [
        'code' => '859',
        'name' => 'Southeast Asia',
    ], [
        'code' => '860',
        'name' => 'History of Africa',
    ], [
        'code' => '861',
        'name' => 'Tunisia & Libya',
    ], [
        'code' => '862',
        'name' => 'Egypt & Sudan',
    ], [
        'code' => '863',
        'name' => 'Ethiopia & Eritrea',
    ], [
        'code' => '864',
        'name' => 'Northwest African coast & offshore islands',
    ], [
        'code' => '865',
        'name' => 'Algeria',
    ], [
        'code' => '866',
        'name' => 'West Africa & offshore islands',
    ], [
        'code' => '867',
        'name' => 'Central Africa & offshore islands',
    ], [
        'code' => '868',
        'name' => 'Southern Africa; Republic of South Africa',
    ], [
        'code' => '869',
        'name' => 'South Indian Ocean islands',
    ], [
        'code' => '870',
        'name' => 'History of North America',
    ], [
        'code' => '871',
        'name' => 'Canada',
    ], [
        'code' => '872',
        'name' => 'Middle America; Mexico',
    ], [
        'code' => '873',
        'name' => 'United States',
    ], [
        'code' => '874',
        'name' => 'Northeastern United States',
    ], [
        'code' => '875',
        'name' => 'Southeastern United States',
    ], [
        'code' => '876',
        'name' => 'South central United States',
    ], [
        'code' => '877',
        'name' => 'North central United States',
    ], [
        'code' => '878',
        'name' => 'Western United States',
    ], [
        'code' => '879',
        'name' => 'Great Basin & Pacific Slope region',
    ], [
        'code' => '880',
        'name' => 'History of South America',
    ], [
        'code' => '881',
        'name' => 'Brazil',
    ], [
        'code' => '882',
        'name' => 'Argentina',
    ], [
        'code' => '883',
        'name' => 'Chile',
    ], [
        'code' => '884',
        'name' => 'Bolivia',
    ], [
        'code' => '885',
        'name' => 'Peru',
    ], [
        'code' => '886',
        'name' => 'Colombia & Ecuador',
    ], [
        'code' => '887',
        'name' => 'Venezuela',
    ], [
        'code' => '888',
        'name' => 'Guiana',
    ], [
        'code' => '889',
        'name' => 'Paraguay & Uruguay',
    ], [
        'code' => '890',
        'name' => 'History of other areas',
    ], [
        'code' => '891',
        'name' => '[Unassigned]',
    ], [
        'code' => '892',
        'name' => '[Unassigned]',
    ], [
        'code' => '893',
        'name' => 'New Zealand',
    ], [
        'code' => '894',
        'name' => 'Australia',
    ], [
        'code' => '895',
        'name' => 'Melanesia; New Guinea',
    ], [
        'code' => '896',
        'name' => 'Other parts of Pacific; Polynesia',
    ], [
        'code' => '897',
        'name' => 'Atlantic Ocean islands',
    ], [
        'code' => '898',
        'name' => 'Arctic islands & Antarctica',
    ], [
        'code' => '899',
        'name' => 'Extraterrestrial worlds',
    ],];



    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        global $arr;
        foreach ($this->arr as  $value) {
            DB::table('types')->insert([

                "name" => $value["name"],
                'code' => $value["code"],

            ]);
        }
    }
}
