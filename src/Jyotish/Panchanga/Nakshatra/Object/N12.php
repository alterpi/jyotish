<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Panchanga\Nakshatra\Object;

use Jyotish\Panchanga\Nakshatra\Nakshatra;
use Jyotish\Graha\Graha;
use Jyotish\Tattva\Jiva\Nara\Deva;
use Jyotish\Tattva\Jiva\Nara\Manusha;
use Jyotish\Tattva\Jiva\Pasu;
use Jyotish\Tattva\Maha;
use Jyotish\Tattva\Ayurveda;

/**
 * Class of nakshatra 12.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class N12 extends NakshatraObject
{
    /**
     * Nakshatra key
     * 
     * @var int
     */
    protected $nakshatraKey = 12;

    /**
     * Devanagari title 'uttara phalguni' in transliteration.
     * 
     * @var array
     * @see Jyotish\Alphabet\Devanagari
     */
    protected $nakshatraTranslit = ['_u','ta','virama','ta','ra',' ','pha','aa','la','virama','ga','u','na','ii'];
    
    /**
     * The number of taras (stars) of the nakshatra.
     * 
     * @var int
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 1-3.
     */
    protected $nakshatraTara = 2;

    /**
     * Deva of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 4-5.
     */
    protected $nakshatraDeva = Deva::DEVA_ARYAMA;

    /**
     * Type of nakshatra.
     * 
     * @var string
     * @see Varahamihira. Brihat Samhita. Chapter 98, Verse 6.
     */
    protected $nakshatraType = Nakshatra::TYPE_DHRUVA;

    /**
     * Graha of nakshatra.
     * 
     * @var string
     * @see Satyacharya. Satya Jatakam. Chapter 1, Verse 9.
     */
    protected $nakshatraRuler = Graha::KEY_SY;

    protected $nakshatraEnergy = Nakshatra::ENERGY_LAYA;
    protected $nakshatraGana = Manusha::GANA_MANUSHA;
    protected $nakshatraGender = Manusha::GENDER_FEMALE;
    protected $nakshatraGuna = Maha::GUNA_RAJA;
    protected $nakshatraPurushartha = Manusha::PURUSHARTHA_MOKSHA;
    protected $nakshatraVarna = Manusha::VARNA_KSHATRIYA;
    protected $nakshatraPrakriti = Ayurveda::PRAKRITI_VATA;
    protected $nakshatraYoni = array(
        'animal' => Pasu::ANIMAL_COW,
        'gender' => Manusha::GENDER_MALE,
    );
    protected $nakshatraRajju = array(
        'lift' => Nakshatra::LIFT_AROHA,
        'limb' => Nakshatra::LIMB_NABHI,
    );

    public function __construct($options = null) {
        parent::__construct($options);
    }
}