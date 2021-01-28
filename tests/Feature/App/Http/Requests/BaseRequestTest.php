<?php

namespace Tests\Feature\App\Http\Requests;

use App\Http\Requests\BaseRequest;
use Illuminate\Support\Arr;
use Tests\Feature\Traits\HasLang;
use Tests\TestCase;

class BaseRequestTest extends TestCase
{
    use HasLang;

    protected function setUp(): void
    {
        parent::setUp();
    }

    private function createRequest(): BaseRequest
    {
        return new BaseRequest();
    }

    /**
     * @param string $attribute
     * @dataProvider requestAttributeProvider
     */
    public function testPassing_attributesの翻訳が行われているか(string $attribute)
    {
        $this->assertHasLangMultipleLocales($attribute, $this->locales, null);
    }

    public function requestAttributeProvider(): array
    {
        $this->createApplication();
        $this->setUpHasLang();

        $request = $this->createRequest();
        $flatten = Arr::flatten($request->attributes());
        return array_map(
            fn ($v) => [ $v ],
            $flatten
        );
    }
}
