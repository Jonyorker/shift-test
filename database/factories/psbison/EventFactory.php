<?php

namespace Database\Factories\psbison;

use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ord_hdrnumber' => $this->faker->randomNumber(),
            'stp_number' => $this->faker->randomNumber(),
            'evt_eventcode' => $this->faker->randomElement(['HPL', 'DUL', 'LUL', 'DRL', 'XDU', 'XDL', 'DUL', 'LLD']),
            'evt_number' => $this->faker->randomNumber(6),
            'evt_startdate' => $this->faker->dateTime(),
            'evt_enddate' => $this->faker->dateTime(),
            'evt_status' => $this->faker->randomElement(['OPN', 'DNE', 'NON']),
            'evt_earlydate' => $this->faker->dateTime(),
            'evt_latedate' => $this->faker->dateTime(),
            'evt_weight' => $this->faker->randomNumber(),
            'evt_weightunit' => $this->faker->randomElement(['UNK', 'LBS', 'KG', '']),
            'fgt_number' => $this->faker->randomNumber(),
            'evt_count' => $this->faker->randomNumber(2),
            'evt_countunit' => $this->faker->randomElement(['PCS', 'ROL', '']),
            'evt_volume' => $this->faker->randomNumber(),
            'evt_volumeunit' => $this->faker->randomElement(['']),
            'evt_pu_dr' => $this->faker->randomElement(['NONE', 'PUP', 'DRP', 'UNK', '']),
            'evt_sequence' => $this->faker->randomNumber(),
            'evt_contact' => $this->faker->randomElement(['']),
            'timestamp' => $this->faker->randomElement(['']),
            'evt_driver1' => $this->faker->randomElement(['']),
            'evt_driver2' => $this->faker->randomElement(['']),
            'evt_tractor' => $this->faker->randomElement(['']),
            'evt_trailer1' => $this->faker->randomElement(['']),
            'evt_trailer2' => $this->faker->randomElement(['']),
            'evt_chassis' => $this->faker->randomElement(['']),
            'evt_dolly' => $this->faker->randomElement(['']),
            'evt_carrier' => $this->faker->randomElement(['']),
            'evt_refype' => $this->faker->randomElement(['']),
            'evt_refnum' => $this->faker->randomElement(['']),
            'evt_reason' => $this->faker->randomElement(['', 'UNK']),
            'evt_enteredby' => $this->faker->randomElement(['']),
            'evt_hubmiles' => null,
            'skip_trigger' => $this->faker->randomElement([0, 1]),
            'bis_proc214' => $this->faker->randomElement(['DNE']),
            'evt_notified' => $this->faker->randomNumber(),
            'evt_mov_number' => $this->faker->randomNumber(),
            'evt_departure_status' => $this->faker->randomElement(['', 'UNK']),
            'evt_converter' => null,
            'evt_hubmiles_trailer1' => null,
            'evt_hubmiles_trailer2' => null,
            'evt_chassis2' => $this->faker->randomElement(['UNKNOWN']),
            'evt_dolly2' => $this->faker->randomElement(['UNKNOWN']),
            'evt_trailer3' => $this->faker->randomElement(['UNKNOWN']),
            'evt_trailer4' => $this->faker->randomElement(['UNKNOWN']),
            'stp_mfh_number' => null,
            'stp_transfer_stp' => null,
            'evt_lghtype1' => $this->faker->randomElement(['', 'UNK']),
            'evt_lghtype2' => $this->faker->randomElement(['', 'UNK']),
            'evt_lghtype3' => $this->faker->randomElement(['', 'UNK']),
            'evt_lghtype4' => $this->faker->randomElement(['', 'UNK']),
            'evt_mfh_number' => $this->faker->randomNumber(),
            'evt_dock_worker' => $this->faker->randomElement(['', 'UNK']),
            'item_id' => $this->faker->randomDigitNotNull(),
            'INS_TIMESTAMP' => date('Y-m-d H:i:s'),
        ];
    }
}
