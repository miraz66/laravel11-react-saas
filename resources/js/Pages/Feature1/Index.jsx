import InputError from "@/Components/InputError";
import InputLabel from "@/Components/InputLabel";
import TextInput from "@/Components/TextInput";
import PrimaryButton from "@/Components/PrimaryButton";
import { useForm } from "@inertiajs/react";
import Feature from "@/Components/Feature";

export default function Index({ feature, answer }) {
    const { data, setData, post, processing, errors, reset } = useForm({
        number1: "",
        number2: "",
    });

    const submit = (e) => {
        e.preventDefault();

        post(route("feature1.calculate"), {
            onSuccess() {
                reset();
            },
        });
    };

    return (
        <Feature feature={feature} answer={answer}>
            <form className="p-8 grid grid-cols-2 gap-3" onSubmit={submit}>
                <div>
                    <InputLabel htmlFor="number1" value="Number 1" />
                    <TextInput
                        id="number1"
                        type="text"
                        name="number1"
                        value={data.number1}
                        className="mt-1 block w-full"
                        onChange={(e) => setData("number1", e.target.value)}
                        required
                        isFocused
                        autoComplete="number1"
                    />
                    <InputError error={errors.number1} />

                    <InputLabel htmlFor="number2" value="Number 2" />
                    <TextInput
                        id="number2"
                        type="text"
                        name="number2"
                        value={data.number2}
                        className="mt-1 block w-full"
                        onChange={(e) => setData("number2", e.target.value)}
                        required
                        isFocused
                        autoComplete="number2"
                    />
                    <InputError error={errors.number2} />
                </div>
                <div className="flex items-center justify-end mt-4 col-span-2">
                    <PrimaryButton type="submit" disabled={processing}>
                        Calculate
                    </PrimaryButton>
                </div>
            </form>
        </Feature>
    );
}
