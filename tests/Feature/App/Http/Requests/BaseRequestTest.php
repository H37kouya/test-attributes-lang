<?php

namespace Tests\Feature\App\Http\Requests;

use App\Http\Requests\BaseRequest;
use Illuminate\Support\Arr;
use Tests\Feature\Traits\HasLang;
use Tests\TestCase;

class BaseRequestTest extends TestCase
{
    use HasLang;

    protected ?array $attributesValue = null;
    protected ?array $attributesKey = null;
    protected ?array $rules = null;

    protected function setUp(): void
    {
        parent::setUp();

        $this->setUpHasLang();
        $request = $this->createRequest();
        $this->rules = array_keys(Arr::dot($request->rules()));
        $this->attributesValue = Arr::flatten($request->attributes());
        $this->attributesKey = array_keys(Arr::dot($request->attributes()));
    }

    protected function tearDown(): void
    {
        parent::tearDown();
        $this->rules = null;
        $this->attributesValue = null;
        $this->attributesKey = null;
        echo memory_get_usage() . PHP_EOL;
    }

    private function createRequest(): BaseRequest
    {
        return new BaseRequest();
    }

    public function testPassing_rulesCountEqualsAttributesCount()
    {
        $diff1 = array_diff_key($this->rules, $this->attributesKey);
        $diff2 = array_diff_key($this->attributesKey, $this->rules);

        $this->assertEquals([], $diff1, 'rulesとattributesのkeyが一致するか (Match rules() keys and attributes keys()? )');
        $this->assertEquals([], $diff2, 'rulesとattributesのkeyが一致するか (Match rules() keys and attributes keys()? )');
    }

    public function testPassing_attributesの翻訳が行われているか()
    {
        foreach ($this->attributesValue as $attribute) {
            if (is_string($attribute))
                $this->assertHasLangMultipleLocales($attribute, $this->locales, null);
        }
    }
}
