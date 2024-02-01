<?php

namespace Tests\Unit;

use App\Models\filier\Filier;
use App\Models\groupe\Groupe;
use App\Repositories\Groupe\GroupeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class GroupeRepositoryTest extends TestCase
{
    use DatabaseTransactions;

    protected GroupeRepository $groupeRepository;

    protected function setUp(): void
    {
        parent::setUp();
        $this->groupeRepository = app(GroupeRepository::class);
    }



    public function testMethodGetAll(): void
    {
        // Assuming getAll method returns array
        $groupe = $this->groupeRepository->getAll();

        // Assert groupe is not empty
        $this->assertNotEmpty($groupe);
    }

    public function test_method_store_groupe(): void
    {
        $filier = Filier::first();

        $data = [
                "nom" => "101",
                "description" => "description dev Web",
                "filier_id" => $filier->id,
        ];

        $this->groupeRepository->store($data);

        $this->assertDatabaseHas('groupes', [
            'comment' => '101'
        ]);

    }

    // methode edit
    public function test_method_update_groupe(): void
    {

        $groupe = Groupe::first();
        $filier = Filier::first();

        $data = [
            "nom" => "102",
            "description" => "description dev Web",
            "filier_id" => $filier->id,
        ];

        $updatedgroupe = $this->groupeRepository->update($data, $groupe->id);

        $this->assertInstanceOf(groupe::class, $updatedgroupe);

        $this->assertDatabaseHas('groupes', [
            'nom' => '102'
        ]);
    }

    // methode delete groupe
    public function test_method_destroy_groupe(): void
    {
        $groupe = Groupe::first();

        // Call the destroy method
        $this->groupeRepository->delete($groupe->id);

        // Assert that the comment no longer exists in the database
        $this->assertDatabaseMissing('comments', [
            'id' => $groupe->id,
        ]);
    }
}
